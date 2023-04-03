<?php

declare(strict_types=1);

namespace SeraPHP\API;

use Koriym\HttpConstants\Method;
use Koriym\HttpConstants\StatusCode;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use SeraPHP\API\Cache\CallCacheControl;
use SeraPHP\Exceptions\RequestException;
use SeraPHP\Exceptions\Riot;
use SeraPHP\Exceptions\SettingsException;
use Symfony\Component\HttpClient\Psr18Client;

final class Connection implements ConnectionInterface
{
    private const API_URL = 'api.riotgames.com';
    private string $apiKey;
    private ClientInterface $client;
    private RequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;
    private ?CacheItemPoolInterface $cache;
    private ?CallCacheControl $ccc = null;
    private Configuration $config;

    private array $callbacksBefore = [];
    private array $callbacksAfter = [];
    private string $resource;

    public function __construct(
        Configuration $config,
        ?ClientInterface $riotClient = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null
    ) {
        $psrClient = new Psr18Client();
        $this->apiKey = $config->getApiKey();
        $this->client = $riotClient ?: $psrClient;
        $this->requestFactory = $requestFactory ?: $psrClient;
        $this->streamFactory = $streamFactory ?: $psrClient;
        $this->config = $config;
        $this->initializeCache();
        $this->setupCallbacks();
    }

    public function get(string $region, string $path): ResponseDecoderInterface
    {
        return $this->_makeCall($this->requestFactory->createRequest(
            Method::GET,
            sprintf('https://%s.%s/%s', $region, self::API_URL, $path),
        ));
    }

    public function post(string $region, string $path, array $data): ResponseDecoderInterface
    {
        $request = $this->requestFactory->createRequest(
            Method::POST,
            sprintf('https://%s.%s/%s', $region, self::API_URL, $path),
        );
        $request = $request->withBody($this->streamFactory->createStream(json_encode(
            $data,
            JSON_THROW_ON_ERROR,
        )));

        return $this->_makeCall($request);
    }

    public function put(string $region, string $path, array $data): ResponseDecoderInterface
    {
        $request = $this->requestFactory->createRequest(
            Method::PUT,
            sprintf('https://%s.%s/%s', $region, self::API_URL, $path),
        );
        $request = $request->withBody($this->streamFactory->createStream(json_encode(
            $data,
            JSON_THROW_ON_ERROR,
        )));

        return $this->_makeCall($request);
    }

    private function _makeCall(RequestInterface $request): ResponseDecoder
    {
        $url = $request->getUri()->getPath();
        $requestHash = md5($url);

        $this->_beforeCall($url, $requestHash);

        if ($this->ccc && $this->ccc->isCallCached($requestHash)) {
            return new ResponseDecoder($this->ccc->loadCallData($requestHash));
        }

        $request = $request->withAddedHeader('X-Riot-Token', $this->apiKey);

        $response = $this->client->sendRequest($request);
        if (StatusCode::OK !== $response->getStatusCode()) {
            $this->statusCodeToException($response);
        }

        $this->_afterCall($url, $requestHash, $response);

        return new ResponseDecoder($response);
    }

    private function statusCodeToException(ResponseInterface $response): void
    {
        switch ($response->getStatusCode()) {
            case StatusCode::BAD_REQUEST:
                throw Riot\BadRequestException::createFromResponse('Bad request', $response);
            case StatusCode::UNAUTHORIZED:
                throw Riot\UnauthorizedException::createFromResponse('Unauthorized', $response);
            case StatusCode::FORBIDDEN:
                throw Riot\ForbiddenException::createFromResponse('Forbidden', $response);
            case StatusCode::NOT_FOUND:
                throw Riot\DataNotFoundException::createFromResponse('Data not found', $response);
            case StatusCode::METHOD_NOT_ALLOWED:
                throw Riot\MethodNotAllowedException::createFromResponse('Method not allowed', $response);
            case StatusCode::UNSUPPORTED_MEDIA_TYPE:
                throw Riot\UnsupportedMediaTypeException::createFromResponse('Unsupported media type', $response);
            case 429: // rate limit
                throw Riot\RateLimitExceededException::createFromResponse('Rate limit exceeded', $response);
            case StatusCode::INTERNAL_SERVER_ERROR:
                throw Riot\InternalServerErrorException::createFromResponse('Internal server error', $response);
            case StatusCode::BAD_GATEWAY:
                throw Riot\BadGatewayException::createFromResponse('Bad gateway', $response);
            case StatusCode::SERVICE_UNAVAILABLE:
                throw Riot\ServiceUnavailableException::createFromResponse('Service unavailable', $response);
            case StatusCode::GATEWAY_TIME_OUT:
                throw Riot\GatewayTimeoutException::createFromResponse('Gateway timeout', $response);
        }
    }

    private function initializeCache(): void
    {
        try {
            $cacheProvider = new \ReflectionClass($this->config->getCacheProvider());
            if (!$cacheProvider->implementsInterface(CacheItemPoolInterface::class)) {
                throw new SettingsException("Provided CacheProvider does not implement Psr\Cache\CacheItemPoolInterface (PSR-6)");
            }

            $this->cache = $cacheProvider->newInstanceArgs($this->config->getCacheProviderParams());
        } catch (\ReflectionException $ex) {
            //  probably problem when instantiating the class
            throw new SettingsException("Failed to initialize CacheProvider class: {$ex->getMessage()}.");
        } catch (\Throwable $ex) {
            //  something went wrong when initializing the class - invalid settings, etc.
            throw new SettingsException("CacheProvider class failed to be initialized: {$ex->getMessage()}.");
        }
    }

    private function saveCache(): bool
    {
        if (!$this->cache) {
            return false;
        }

        $ccc = $this->cache->getItem('api-calls.cache');
        $ccc->set($this->ccc);
        $ccc->expiresAfter(60);

        $this->cache->saveDeferred($ccc);

        return $this->cache->commit();
    }

    private function setupCallbacks(): void
    {
        $this->callbacksBefore[] = static function () {
            //            if ($this->getCacheRateLimit() && $this->rlc != false) {
            //                if ($this->rlc->canCall($this->getSetting($this->used_key), $this->getRegion(), $this->getResource(), $this->getResourceEndpoint()) == false) {
            //                    throw new RateLimitException('API call rate limit would be exceeded by this call.');
            //                }
            //            }
        };

        $this->callbacksAfter[] = function () {
            $requestHash = func_get_arg(2);
            $response = func_get_arg(3);
            if ($this->ccc && !$this->ccc->isCallCached($requestHash)) {
                if (is_int($this->config->getCacheCallsLength())) {
                    $timeInterval = $this->config->getCacheCallsLength();
                } else {
                    $timeInterval = @$this->config->getCacheCallsLength()[$this->getResource()];
                }
                $this->ccc->saveCallData($requestHash, $response->getBody(), $timeInterval);
            }
        };

        $this->callbacksAfter[] = function () {
            $this->saveCache();
        };
    }

    public function setResource(string $resource): self
    {
        $this->resource = $resource;

        return $this;
    }

    private function getResource(): string
    {
        return $this->resource;
    }

    private function _beforeCall(string $url, string $requestHash): void
    {
        foreach ($this->callbacksBefore as $function) {
            if (false === $function($this, $url, $requestHash)) {
                throw new RequestException('Request terminated by beforeCall function.');
            }
        }
    }

    private function _afterCall(string $url, string $requestHash, ?ResponseInterface $response): void
    {
        foreach ($this->callbacksAfter as $function) {
            $function($this, $url, $requestHash, $response);
        }
    }
}
