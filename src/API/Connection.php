<?php

declare(strict_types=1);

namespace SeraPHPhine\API;

use Koriym\HttpConstants\Method;
use Koriym\HttpConstants\StatusCode;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use SeraPHPhine\Exceptions\BadGatewayException;
use SeraPHPhine\Exceptions\BadRequestException;
use SeraPHPhine\Exceptions\DataNotFoundException;
use SeraPHPhine\Exceptions\ForbiddenException;
use SeraPHPhine\Exceptions\GatewayTimeoutException;
use SeraPHPhine\Exceptions\InternalServerErrorException;
use SeraPHPhine\Exceptions\MethodNotAllowedException;
use SeraPHPhine\Exceptions\RateLimitExceededException;
use SeraPHPhine\Exceptions\ServiceUnavailableException;
use SeraPHPhine\Exceptions\UnauthorizedException;
use SeraPHPhine\Exceptions\UnsupportedMediaTypeException;
use Symfony\Component\HttpClient\Psr18Client;

final class Connection implements ConnectionInterface
{
    private const API_URL = 'api.riotgames.com';
    private string $apiKey;
    private ClientInterface $client;
    private RequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;

    public function __construct(
        string $apiKey,
        ?ClientInterface $riotClient = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null
    ) {
        $psrClient = new Psr18Client();
        $this->apiKey = $apiKey;
        $this->client = $riotClient ?: $psrClient;
        $this->requestFactory = $requestFactory ?: $psrClient;
        $this->streamFactory = $streamFactory ?: $psrClient;
    }

    public function get(string $region, string $path): ResponseDecoderInterface
    {
        $request = $this->requestFactory->createRequest(
            Method::GET,
            sprintf('https://%s.%s/%s', $region, self::API_URL, $path),
        );
        $request = $request->withAddedHeader('X-Riot-Token', $this->apiKey);

        $response = $this->client->sendRequest($request);
        if (StatusCode::OK !== $response->getStatusCode()) {
            $this->statusCodeToException($response);
        }

        return new ResponseDecoder($response);
    }

    public function post(string $region, string $path, array $data): ResponseDecoderInterface
    {
        return $this->sendRequestWithData(
            Method::POST,
            $region,
            $path,
            $data,
        );
    }

    public function put(string $region, string $path, array $data): ResponseDecoderInterface
    {
        return $this->sendRequestWithData(
            Method::PUT,
            $region,
            $path,
            $data,
        );
    }

    private function sendRequestWithData(string $method, string $region, string $path, array $data): ResponseDecoderInterface
    {
        $request = $this->requestFactory->createRequest(
            $method,
            sprintf('https://%s.%s/%s', $region, self::API_URL, $path),
        );
        $request = $request->withAddedHeader('X-Riot-Token', $this->apiKey);
        $request = $request->withBody($this->streamFactory->createStream(json_encode(
            $data,
            JSON_THROW_ON_ERROR,
        )));

        $response = $this->client->sendRequest($request);
        if (StatusCode::OK !== $response->getStatusCode()) {
            $this->statusCodeToException($response);
        }

        return new ResponseDecoder($response);
    }

    private function statusCodeToException(ResponseInterface $response): void
    {
        switch ($response->getStatusCode()) {
            case StatusCode::BAD_REQUEST:
                throw BadRequestException::createFromResponse('Bad request', $response);
            case StatusCode::UNAUTHORIZED:
                throw UnauthorizedException::createFromResponse('Unauthorized', $response);
            case StatusCode::FORBIDDEN:
                throw ForbiddenException::createFromResponse('Forbidden', $response);
            case StatusCode::NOT_FOUND:
                throw DataNotFoundException::createFromResponse('Data not found', $response);
            case StatusCode::METHOD_NOT_ALLOWED:
                throw MethodNotAllowedException::createFromResponse('Method not allowed', $response);
            case StatusCode::UNSUPPORTED_MEDIA_TYPE:
                throw UnsupportedMediaTypeException::createFromResponse('Unsupported media type', $response);
            case 429: // rate limit
                throw RateLimitExceededException::createFromResponse('Rate limit exceeded', $response);
            case StatusCode::INTERNAL_SERVER_ERROR:
                throw InternalServerErrorException::createFromResponse('Internal server error', $response);
            case StatusCode::BAD_GATEWAY:
                throw BadGatewayException::createFromResponse('Bad gateway', $response);
            case StatusCode::SERVICE_UNAVAILABLE:
                throw ServiceUnavailableException::createFromResponse('Service unavailable', $response);
            case StatusCode::GATEWAY_TIME_OUT:
                throw GatewayTimeoutException::createFromResponse('Gateway timeout', $response);
        }
    }
}
