<?php

declare(strict_types=1);

namespace SeraPHPhine;

use Riot\Exception\InvalidApiVersionException;
use SeraPHPhine\API\AbstractAPIFactory;
use SeraPHPhine\API\ConnectionInterface;
use SeraPHPhine\API\Endpoints\Version1;
use SeraPHPhine\DTO as Dto;
use SeraPHPhine\Enum\GeoRegionEnum;

class SeraPHPhine
{
    private const VERSION_1 = 'version1';
    private const VERSION_3 = 'version3';
    private const VERSION_4 = 'version4';

    protected ConnectionInterface $connection;
    protected Version1 $version1;

    /** @var array<string, AbstractAPIFactory> */
    private array $factories;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
        $this->version1 = $this->createFactory(self::VERSION_1);
    }

    public function getByPuuid(string $puuid, GeoRegionEnum $geoRegion): Dto\AccountDTO
    {
        return $this->version1->getAccount()->getByPuuid($puuid, $geoRegion);
    }

    public function getByGameNameAndTagLine(string $gameName, string $tagLine, GeoRegionEnum $geoRegion): Dto\AccountDTO
    {
        return $this->version1->getAccount()->getByGameNameAndTagLine($gameName, $tagLine, $geoRegion);
    }

    public function getByGameAndPuuid(string $game, string $puuid, GeoRegionEnum $geoRegion): Dto\ActiveShardDTO
    {
        return $this->version1->getAccount()->getByGameAndPuuid($game, $puuid, $geoRegion);
    }


    private function createFactory(string $key): AbstractAPIFactory
    {
        if (isset($this->factories[$key])) {
            return $this->factories[$key];
        }

        switch ($key) {
            case self::VERSION_1:
                $api = new Version1($this->connection);
                break;
//            case self::VERSION_3:
//                $api = new Version3($this->connection);
//                break;
//            case self::VERSION_4:
//                $api = new Version4($this->connection);
//                break;
            default:
                throw new InvalidApiVersionException();
        }

        $this->factories[$key] = $api;

        return $this->factories[$key];
    }
}
