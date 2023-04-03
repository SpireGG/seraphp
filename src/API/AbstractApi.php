<?php

declare(strict_types=1);

namespace SeraPHP\API;

abstract class AbstractApi
{
    protected ConnectionInterface $riotConnection;

    public function __construct(ConnectionInterface $riotConnection)
    {
        $this->riotConnection = $riotConnection;
    }
}
