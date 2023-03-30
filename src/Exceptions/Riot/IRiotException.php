<?php

declare(strict_types=1);

namespace SeraPHPhine\Exceptions\Riot;

use Psr\Http\Message\ResponseInterface;

interface IRiotException
{
    public static function createFromResponse(string $message, ResponseInterface $response): self;

    public function getEdgeTraceId(): string;
}
