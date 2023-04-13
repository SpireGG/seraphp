<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\SummonerDTO;
use SeraPHP\Enum\RegionEnum;

final class Summoner extends AbstractApi
{
    public const RESOURCE_SUMMONER = '1416:summoner';

    public function getByName(string $summonerName, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/summoner/v4/summoners/by-name/{$summonerName}",
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByAccountId(string $encryptedAccountId, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/summoner/v4/summoners/by-account/{$encryptedAccountId}",
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByPuuid(string $encryptedPuuid, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/summoner/v4/summoners/by-puuid/{$encryptedPuuid}",
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getById(string $id, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/summoner/v4/summoners/{$id}",
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_SUMMONER;
    }
}
