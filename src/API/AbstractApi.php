<?php

declare(strict_types=1);

namespace SeraPHPhine\API;

abstract class AbstractApi
{
    protected ConnectionInterface $riotConnection;

    public function __construct(ConnectionInterface $riotConnection)
    {
        $this->riotConnection = $riotConnection;
    }
}
