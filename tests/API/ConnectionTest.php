<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use SeraPHPhine\API\Connection;
use SeraPHPhine\API\ResponseDecoderInterface;
use SeraPHPhine\Exceptions as SeraPHPhineException;

final class ConnectionTest extends TestCase
{
    private RequestInterface|MockObject $request;

    private MockObject|RequestFactoryInterface $requestFactory;

    private ResponseInterface|MockObject $response;

    private StreamFactoryInterface|MockObject $streamFactory;

    public function setUp(): void
    {
        $this->request = $this->createMock(RequestInterface::class);
        $this->request->expects(self::once())
            ->method('withAddedHeader')
            ->with(self::equalTo('X-Riot-Token'), self::equalTo('my-api-token'))
            ->willReturnSelf();

        $this->requestFactory = $this->createMock(RequestFactoryInterface::class);
        $this->response = $this->createMock(ResponseInterface::class);
        $this->streamFactory = $this->createMock(StreamFactoryInterface::class);
    }

    public function testGetBuildsRequestWithApiTokenHeader(): void
    {
        $this->mockCreateRequestMethod('GET');

        $connection = new Connection(
            'my-api-token',
            $this->createMock(ClientInterface::class),
            $this->requestFactory,
            $this->streamFactory,
        );

        $connection->get('region', 'path');
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
            'my-api-token',
            $this->createMock(ClientInterface::class),
            $this->requestFactory,
            $this->streamFactory,
        );

        $connection->$method('region', 'path', []);
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
            'my-api-token',
            $client,
            $this->requestFactory,
            $this->streamFactory,
        );
        switch ($method) {
            case 'GET':
                $connection->get('region', 'path');
                break;
            case 'PUT':
            case 'POST':
                $this->request->expects(self::once())
                    ->method('withBody')
                    ->willReturnSelf();
                $connection->$method('region', 'path', []);
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
            'my-api-token',
            $client,
            $this->requestFactory,
            $this->streamFactory,
        );
        $result = $connection->get('region', 'path');

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
            'my-api-token',
            $client,
            $this->requestFactory,
            $this->streamFactory,
        );
        $result = $connection->$method('region', 'path', []);

        self::assertInstanceOf(ResponseDecoderInterface::class, $result);
    }

    /**
     * @return array<array<int, class-string|int>>
     */
    public function statusCodesAndExceptionsProvider(): array
    {
        return [
            [400, SeraPHPhineException\BadRequestException::class],
            [401, SeraPHPhineException\UnauthorizedException::class],
            [403, SeraPHPhineException\ForbiddenException::class],
            [404, SeraPHPhineException\DataNotFoundException::class],
            [405, SeraPHPhineException\MethodNotAllowedException::class],
            [415, SeraPHPhineException\UnsupportedMediaTypeException::class],
            [429, SeraPHPhineException\RateLimitExceededException::class],
            [500, SeraPHPhineException\InternalServerErrorException::class],
            [502, SeraPHPhineException\BadGatewayException::class],
            [503, SeraPHPhineException\ServiceUnavailableException::class],
            [504, SeraPHPhineException\GatewayTimeoutException::class],
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
