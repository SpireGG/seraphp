<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\Collection\LeagueEntryDTOCollection;
use SeraPHP\DTO\LeagueListDTO;
use SeraPHP\Enum\DivisionEnum;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Enum\TierEnum;

final class TftLeague extends AbstractApi
{
    public function getChallenger(RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get($region->getValue(), 'tft/league/v1/challenger', $this->getResource());

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): LeagueEntryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/league/v1/entries/by-summoner/%s', $encryptedSummonerId),
            $this->getResource()
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
            $this->getResource()
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getGrandmaster(RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get($region->getValue(), 'tft/league/v1/grandmaster', $this->getResource());

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getById(string $id, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('tft/league/v1/leagues/%s', $id),
            $this->getResource()
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getMaster(RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get($region->getValue(), 'tft/league/v1/master', $this->getResource());

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return 'val';
    }
}
