<?php

declare(strict_types=1);

namespace SeraPHP;

use SeraPHP\API\AbstractAPIFactory;
use SeraPHP\API\Configuration;
use SeraPHP\API\Connection;
use SeraPHP\API\ConnectionInterface;
use SeraPHP\API\Endpoints\Version1;
use SeraPHP\API\Endpoints\Version3;
use SeraPHP\API\Endpoints\Version4;
use SeraPHP\API\Endpoints\Version5;
use SeraPHP\Exceptions\Riot\InvalidApiVersionException;

abstract class ASeraphphine
{
    private const VERSION_1 = 'version1';
    private const VERSION_3 = 'version3';
    private const VERSION_4 = 'version4';
    private const VERSION_5 = 'version5';

    private ConnectionInterface $connection;

    /** @var array<string, AbstractAPIFactory> */
    private array $factories;

    public function __construct(array|Configuration $config)
    {
        $config = is_array($config) ? new Configuration($config) : $config;
        $config->validate();
        $this->connection = new Connection($config);
    }

    private function createFactory(string $key): AbstractAPIFactory
    {
        if (isset($this->factories[$key])) {
            return $this->factories[$key];
        }

        $api = match ($key) {
            self::VERSION_1 => new Version1($this->connection),
            self::VERSION_3 => new Version3($this->connection),
            self::VERSION_4 => new Version4($this->connection),
            self::VERSION_5 => new Version5($this->connection),
            default => throw new InvalidApiVersionException(),
        };

        $this->factories[$key] = $api;

        return $this->factories[$key];
    }

    protected function getVersion1(): Version1
    {
        /** @var Version1 $factory */
        $factory = $this->createFactory(self::VERSION_1);

        return $factory;
    }

    protected function getVersion3(): Version3
    {
        /** @var Version3 $factory */
        $factory = $this->createFactory(self::VERSION_3);

        return $factory;
    }

    protected function getVersion4(): Version4
    {
        /** @var Version4 $factory */
        $factory = $this->createFactory(self::VERSION_4);

        return $factory;
    }

    protected function getVersion5(): Version5
    {
        /** @var Version5 $factory */
        $factory = $this->createFactory(self::VERSION_5);

        return $factory;
    }
}
