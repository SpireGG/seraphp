<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\SummonerDTO;
use SeraPHP\Enum\RegionEnum;

final class Summoner extends AbstractApi
{
    public function getByName(string $summonerName, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/summoner/v4/summoners/by-name/%s', $summonerName),
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByAccountId(string $encryptedAccountId, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/summoner/v4/summoners/by-account/%s', $encryptedAccountId),
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByPuuid(string $encryptedPuuid, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/summoner/v4/summoners/by-puuid/%s', $encryptedPuuid),
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getById(string $id, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/summoner/v4/summoners/%s', $id),
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
