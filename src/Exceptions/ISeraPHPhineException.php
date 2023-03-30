<?php

namespace SeraPHPhine\Exceptions;

use Psr\Http\Message\ResponseInterface;

interface ISeraPHPhineException
{
    public static function createFromResponse(string $message, ResponseInterface $response): self;
    public function getEdgeTraceId(): string;
}
