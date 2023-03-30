<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version1;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\Collection\LeagueEntryDTOCollection;
use SeraPHPhine\DTO\LeagueListDTO;
use SeraPHPhine\Enum\DivisionEnum;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Enum\TierEnum;

final class TftLeague extends AbstractApi
{

    public function getChallenger(RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get($region->getValue(), 'tft/league/v1/challenger');

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): LeagueEntryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/league/v1/entries/by-summoner/%s', $encryptedSummonerId),
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getByTierAndDivision(
        TierEnum $tier,
        DivisionEnum $division,
        RegionEnum $region,
        int $page = 1
    ): LeagueEntryDTOCollection {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'tft/league/v1/entries/%s/%s?page=%d',
                $tier->getValue(),
                $division->getValue(),
                $page
            ),
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getGrandmaster(RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get($region->getValue(), 'tft/league/v1/grandmaster');

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getById(string $id, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/league/v1/leagues/%s', $id),
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getMaster(RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get($region->getValue(), 'tft/league/v1/master');

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
