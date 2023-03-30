<?php

declare(strict_types=1);

namespace SeraPHPhine;

use SeraPHPhine\API\AbstractAPIFactory;
use SeraPHPhine\API\Connection;
use SeraPHPhine\API\ConnectionInterface;
use SeraPHPhine\API\Endpoints\Version1;
use SeraPHPhine\API\Endpoints\Version3;
use SeraPHPhine\API\Endpoints\Version4;
use SeraPHPhine\DTO as Dto;
use SeraPHPhine\Enum\GeoRegionEnum;
use SeraPHPhine\Exceptions\InvalidApiVersionException;

class SeraPHPhine
{
    private const VERSION_1 = 'version1';
    private const VERSION_3 = 'version3';
    private const VERSION_4 = 'version4';

    protected ConnectionInterface $connection;

    /** @var array<string, AbstractAPIFactory> */
    private array $factories;

    public function __construct(array $config)
    {
        $this->connection = new Connection($config);
    }

    public function getByPuuid(string $puuid, GeoRegionEnum $geoRegion): Dto\AccountDTO
    {
        return $this->getVersion1()->getAccount()->getByPuuid($puuid, $geoRegion);
    }

    public function getByGameNameAndTagLine(string $gameName, string $tagLine, GeoRegionEnum $geoRegion): Dto\AccountDTO
    {
        return $this->getVersion1()->getAccount()->getByGameNameAndTagLine($gameName, $tagLine, $geoRegion);
    }

    public function getByGameAndPuuid(string $game, string $puuid, GeoRegionEnum $geoRegion): Dto\ActiveShardDTO
    {
        return $this->getVersion1()->getAccount()->getByGameAndPuuid($game, $puuid, $geoRegion);
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
            default => throw new InvalidApiVersionException(),
        };

        $this->factories[$key] = $api;

        return $this->factories[$key];
    }

    public function getVersion1(): Version1
    {
        /** @var Version1 $factory */
        $factory = $this->createFactory(self::VERSION_1);

        return $factory;
    }

    public function getVersion3(): Version3
    {
        /** @var Version3 $factory */
        $factory = $this->createFactory(self::VERSION_3);

        return $factory;
    }

    public function getVersion4(): Version4
    {
        /** @var Version4 $factory */
        $factory = $this->createFactory(self::VERSION_4);

        return $factory;
    }
}
