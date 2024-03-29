<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\SummonerDTO;
use SeraPHP\Enum\RegionEnum;

final class TftSummoner extends AbstractApi
{
    public function getByAccountId(string $encryptedAccountId, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/summoner/v1/summoners/by-account/%s', $encryptedAccountId),
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByName(string $summonerName, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/summoner/v1/summoners/by-name/%s', $summonerName),
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getByPuuid(string $encryptedPuuid, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/summoner/v1/summoners/by-puuid/%s', $encryptedPuuid),
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getById(string $id, RegionEnum $region): SummonerDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/summoner/v1/summoners/%s', $id),
            $this->getResource()
        );

        return SummonerDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return 'val';
    }
}
