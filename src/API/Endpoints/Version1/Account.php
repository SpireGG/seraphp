<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\API\Configuration;
use SeraPHP\DTO\AccountDTO;
use SeraPHP\DTO\ActiveShardDTO;
use SeraPHP\Enum\GeoRegionEnum;

final class Account extends AbstractApi
{
    public function getByPuuid(string $puuid, GeoRegionEnum $geoRegion): AccountDTO
    {
        $response = $this->riotConnection
//            ->setResource(Configuration::RESOURCE_CHAMPION)
            ->get(
                $geoRegion->getValue(),
                sprintf('riot/account/v1/accounts/by-puuid/%s', $puuid),
            );

        return AccountDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByGameNameAndTagLine(string $gameName, string $tagLine, GeoRegionEnum $geoRegion): AccountDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('riot/account/v1/accounts/by-riot-id/%s/%s', $gameName, $tagLine),
        );

        return AccountDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByGameAndPuuid(string $game, string $puuid, GeoRegionEnum $geoRegion): ActiveShardDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('riot/account/v1/active-shards/by-game/%s/by-puuid/%s', $game, $puuid),
        );

        return ActiveShardDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
