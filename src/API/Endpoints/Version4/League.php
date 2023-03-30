<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\Collection\LeagueEntryDTOCollection;
use SeraPHPhine\DTO\LeagueListDTO;
use SeraPHPhine\Enum\DivisionEnum;
use SeraPHPhine\Enum\QueueEnum;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Enum\TierEnum;

final class League extends AbstractApi
{

    public function getChallengerLeaguesByQueue(QueueEnum $queue, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/challengerleagues/by-queue/%s', $queue->getValue()),
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): LeagueEntryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/entries/by-summoner/%s', $encryptedSummonerId),
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getByQueueAndTierAndDivision(
        QueueEnum $queue,
        TierEnum $tier,
        DivisionEnum $division,
        RegionEnum $region,
        int $page = 1
    ): LeagueEntryDTOCollection {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'lol/league/v4/entries/%s/%s/%s?page=%d',
                $queue->getValue(),
                $tier->getValue(),
                $division->getValue(),
                $page
            ),
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getGrandmasterLeaguesByQueue(QueueEnum $queue, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/grandmasterleagues/by-queue/%s', $queue->getValue()),
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getById(string $leagueId, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/leagues/%s', $leagueId),
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getMasterLeaguesByQueue(QueueEnum $queue, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/masterleagues/by-queue/%s', $queue->getValue()),
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
