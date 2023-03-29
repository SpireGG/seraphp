<?php

declare(strict_types=1);

namespace SeraPHPhine\Exceptions;

final class InvalidApiEndpointException extends SeraPHPhineException
{
    public function __construct(string $message = '')
    {
        parent::__construct($message, '');
    }
}
