<?php

namespace SeraPHPhine;

use Koriym\HttpConstants\Method;
use SeraPHPhine\Exceptions\RequestException;
use SeraPHPhine\Exceptions\ServerException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiRequest
{
    protected string $endpoint;
    protected string $resource;
    protected string $resource_endpoint;
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    protected function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    protected function setResource(string $resource, string $endpoint): self
    {
        $this->resource = $resource;
        $this->resource_endpoint = $endpoint;

        return $this;
    }

    protected function makeCall(string $overrideRegion = null, string $method = Method::GET)
    {

        $this->httpClient->request(
            $method,
            $this->_getCallUrl(),
            []
        );

        if ($overrideRegion)
            $this->setTemporaryRegion($overrideRegion);
        $this->used_method = $method;

        $requestHeaders = [];
        $requestPromise = null;
        $url = $this->_getCallUrl($requestHeaders);
        $requestHash = md5($url);

        $this->_beforeCall($url, $requestHash);

        if (!$requestPromise && $this->getSetting(self::SET_USE_DUMMY_DATA, false))
        {
            // DummyData are supposed to be used
            try
            {
                // try loading the data
                $this->_loadDummyData($responseHeaders, $responseBody, $responseCode);
                $this->processCallResult($responseHeaders, $responseBody, $responseCode);
                $this->_afterCall($url, $requestHash, $this->_getDummyDataFileName());
                $requestPromise = new FulfilledPromise($this->getResult());
            }
            catch (RequestException $ex)
            {
                // loading failed, check whether an actual request should be made
                if ($this->getSetting(self::SET_SAVE_DUMMY_DATA, false) == false)
                    // saving is not allowed, dummydata does not exist
                    throw $ex;
            }
        }

        if (!$requestPromise && $this->getSetting(self::SET_CACHE_CALLS) && $this->ccc && $this->ccc->isCallCached($requestHash))
        {
            // calls are cached and this request is saved in cache
            $this->processCallResult([], $this->ccc->loadCallData($requestHash), 200);
            $requestPromise = new FulfilledPromise($this->getResult());
        }

        if (!$requestPromise)
        {
            // calls are not cached or this request is not cached
            // perform call to Riot API
            $guzzle = $this->guzzle;
            if ($this->next_async_request)
                $guzzle = $this->next_async_request->client;

            $options = $this->getSetting(self::SET_GUZZLE_REQ_CFG);
            $options[RequestOptions::VERIFY] = $this->getSetting(self::SET_VERIFY_SSL);
            $options[RequestOptions::HEADERS] = $requestHeaders;
            if ($this->post_data)
                $options[RequestOptions::BODY] = $this->post_data;

            if ($this->isSettingSet(self::SET_DEBUG) && $this->getSetting(self::SET_DEBUG))
                $options[RequestOptions::DEBUG] = fopen('php://stderr', 'w');

            // Create HTTP request
            $requestPromise = $guzzle->requestAsync($method, $url, $options);

            $dummyData_file = $this->_getDummyDataFileName();
            $requestPromise = $requestPromise->then(function(ResponseInterface $response) use ($url, $requestHash, $dummyData_file) {
                $this->processCallResult($response->getHeaders(), $response->getBody(), $response->getStatusCode());
                $this->_afterCall($url, $requestHash, $dummyData_file);
                return $this->getResult();
            });
        }

        // If request fails, try to process it and raise exceptions
        $requestPromise = $requestPromise->otherwise(function($ex) {
            /** @var \Exception $ex */

            if ($ex instanceof GuzzleHttpExceptions\RequestException)
            {
                $responseHeaders = [];
                $responseBody    = null;
                $responseCode    = $ex->getCode();

                if ($response = $ex->getResponse())
                {
                    $responseHeaders = $response->getHeaders();
                    $responseBody    = $response->getBody();
                }

                $this->processCallResult($responseHeaders, $responseBody, $responseCode);
                throw new RequestException("LeagueAPI: Request error occured - {$ex->getMessage()}", $ex->getCode(), $ex);
            }
            elseif ($ex instanceof GuzzleHttpExceptions\ServerException)
            {
                throw new ServerException("LeagueAPI: Server error occured - {$ex->getMessage()}", $ex->getCode(), $ex);
            }

            throw new RequestException("LeagueAPI: Request could not be sent - {$ex->getMessage()}", $ex->getCode(), $ex);
        });

        if ($overrideRegion)
            $this->unsetTemporaryRegion();

        if ($this->next_async_request)
            return $requestPromise;

        $this->query_data = [];
        $this->post_data  = null;

        return $requestPromise;
    }
}
