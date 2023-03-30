<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\SummonerDTO;
use SeraPHPhine\Enum\RegionEnum;

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
