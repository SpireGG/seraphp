<?php

declare(strict_types=1);

namespace SeraPHPhine\Exceptions\Riot;

final class InvalidApiVersionException extends RiotException
{
    public function __construct(string $message = '')
    {
        parent::__construct($message, '');
    }
}
