<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriInterface;
use SeraPHP\API\Configuration;
use SeraPHP\API\Connection;
use SeraPHP\API\ResponseDecoderInterface;
use SeraPHP\Exceptions as SeraPHPException;
use Symfony\Component\Cache\Adapter\NullAdapter;

final class ConnectionTest extends TestCase
{
    private RequestInterface|MockObject $request;

    private MockObject|RequestFactoryInterface $requestFactory;

    private ResponseInterface|MockObject $response;

    private StreamFactoryInterface|MockObject $streamFactory;

    public function setUp(): void
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->expects(self::once())
            ->method('getPath')
            ->willReturn('https://region.api.riotgames.com/path');
        $this->request = $this->createMock(RequestInterface::class);
        $this->request->expects(self::once())
            ->method('withAddedHeader')
            ->with(self::equalTo('X-Riot-Token'), self::equalTo('my-api-token'))
            ->willReturnSelf();
        $this->request->expects(self::once())
            ->method('getUri')
            ->willReturn($uri);

        $this->requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->response = $this->createMock(ResponseInterface::class);
        $this->streamFactory = $this->createMock(StreamFactoryInterface::class);
    }

    public function testGetBuildsRequestWithApiTokenHeader(): void
    {
        $this->mockCreateRequestMethod('GET');

        $connection = new Connection(
            new Configuration([
                'api_key' => 'my-api-token',
                'cacheCallsLength' => ['resource' => 5],
                'cacheProvider' => NullAdapter::class,
            ]),
            $this->createMock(ClientInterface::class),
            $this->requestFactory,
            $this->streamFactory,
        );

        $connection->get('region', 'path', 'resource');
    }

    /**
     * @dataProvider requestWithDataMethodsProvider
     */
    public function testMethodsWithDataBuildsRequestWithApiTokenHeader(string $method): void
    {
        $this->mockCreateRequestMethod($method);
        $this->request->expects(self::once())
            ->method('withBody')
            ->willReturnSelf();

        $connection = new Connection(
            new Configuration([
                'api_key' => 'my-api-token',
                'cacheCallsLength' => ['resource' => 5],
                'cacheProvider' => NullAdapter::class,
            ]),
            $this->createMock(ClientInterface::class),
            $this->requestFactory,
            $this->streamFactory,
        );

        $connection->$method('region', 'path', 'resource', []);
    }

    /**
     * @dataProvider statusCodesAndExceptionsProvider
     *
     * @psalm-param class-string<\Throwable> $expectedException
     */
    public function testGetThrowsProperExceptionOnError(int $statusCode, string $expectedException): void
    {
        $this->testExceptionForMethod('GET', $statusCode, $expectedException);
    }

    /**
     * @dataProvider statusCodesAndExceptionsProvider
     *
     * @psalm-param class-string<\Throwable> $expectedException
     */
    public function testPostThrowsProperExceptionOnError(int $statusCode, string $expectedException): void
    {
        $this->testExceptionForMethod('POST', $statusCode, $expectedException);
    }

    /**
     * @dataProvider statusCodesAndExceptionsProvider
     *
     * @psalm-param class-string<\Throwable> $expectedException
     */
    public function testPutThrowsProperExceptionOnError(int $statusCode, string $expectedException): void
    {
        $this->testExceptionForMethod('PUT', $statusCode, $expectedException);
    }

    /**
     * @param class-string<\Throwable> $expectedException
     */
    private function testExceptionForMethod(string $method, int $statusCode, string $expectedException): void
    {
        $this->mockCreateRequestMethod($method);

        $this->expectException($expectedException);

        $this->response->expects(self::exactly(2))
            ->method('getStatusCode')
            ->willReturn($statusCode);
        $this->response
            ->method('getHeader')
            ->willReturn(['1']);

        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->willReturn($this->response);

        $connection = new Connection(
            new Configuration([
                'api_key' => 'my-api-token',
                'cacheCallsLength' => ['resource' => 5],
                'cacheProvider' => NullAdapter::class,
            ]),
            $client,
            $this->requestFactory,
            $this->streamFactory,
        );
        switch ($method) {
            case 'GET':
                $connection->get('region', 'path', 'resource');
                break;
            case 'PUT':
            case 'POST':
                $this->request->expects(self::once())
                    ->method('withBody')
                    ->willReturnSelf();
                $connection->$method('region', 'path', 'resource', []);
                break;
        }
    }

    public function testGetReturnsResponsesWhenNoError(): void
    {
        $this->mockCreateRequestMethod('GET');

        $this->response->expects(self::once())
            ->method('getStatusCode')
            ->willReturn(200);

        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->willReturn($this->response);

        $connection = new Connection(
            new Configuration([
                'api_key' => 'my-api-token',
                'cacheCallsLength' => ['resource' => 5],
                'cacheProvider' => NullAdapter::class,
            ]),
            $client,
            $this->requestFactory,
            $this->streamFactory,
        );
        $result = $connection->get('region', 'path', 'resource');

        self::assertInstanceOf(ResponseDecoderInterface::class, $result);
    }

    /**
     * @dataProvider requestWithDataMethodsProvider
     */
    public function testMethodsWithDataReturnResponsesWhenNoError(string $method): void
    {
        $this->mockCreateRequestMethod($method);
        $this->request->expects(self::once())
            ->method('withBody')
            ->willReturnSelf();

        $this->response->expects(self::once())
            ->method('getStatusCode')
            ->willReturn(200);

        $client = $this->createMock(ClientInterface::class);
        $client->expects(self::once())
            ->method('sendRequest')
            ->willReturn($this->response);

        $connection = new Connection(
            new Configuration([
                'api_key' => 'my-api-token',
                'cacheCallsLength' => ['resource' => 5],
                'cacheProvider' => NullAdapter::class,
            ]),
            $client,
            $this->requestFactory,
            $this->streamFactory,
        );
        $result = $connection->$method('region', 'path', 'resource', []);

        self::assertInstanceOf(ResponseDecoderInterface::class, $result);
    }

    /**
     * @return array<array<int, class-string|int>>
     */
    public function statusCodesAndExceptionsProvider(): array
    {
        return [
            [400, SeraPHPException\Riot\BadRequestException::class],
            [401, SeraPHPException\Riot\UnauthorizedException::class],
            [403, SeraPHPException\Riot\ForbiddenException::class],
            [404, SeraPHPException\Riot\DataNotFoundException::class],
            [405, SeraPHPException\Riot\MethodNotAllowedException::class],
            [415, SeraPHPException\Riot\UnsupportedMediaTypeException::class],
            [429, SeraPHPException\Riot\RateLimitExceededException::class],
            [500, SeraPHPException\Riot\InternalServerErrorException::class],
            [502, SeraPHPException\Riot\BadGatewayException::class],
            [503, SeraPHPException\Riot\ServiceUnavailableException::class],
            [504, SeraPHPException\Riot\GatewayTimeoutException::class],
        ];
    }

    /**
     * @return array<array<string>>
     */
    public function requestWithDataMethodsProvider(): array
    {
        return [
            ['POST'],
            ['PUT'],
        ];
    }

    private function mockCreateRequestMethod(string $method): void
    {
        $this->requestFactory->expects(self::once())
            ->method('createRequest')
            ->with(self::equalTo($method), self::equalTo('https://region.api.riotgames.com/path'))
            ->willReturn($this->request);
    }
}
