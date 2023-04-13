<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\Collection\LeagueEntryDTOCollection;
use SeraPHP\DTO\LeagueListDTO;
use SeraPHP\Enum\DivisionEnum;
use SeraPHP\Enum\QueueEnum;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Enum\TierEnum;

final class League extends AbstractApi
{
    public const RESOURCE_LEAGUE = '1424:league';

    public function getChallengerLeaguesByQueue(QueueEnum $queue, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/challengerleagues/by-queue/%s', $queue->getValue()),
            $this->getResource()
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): LeagueEntryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/entries/by-summoner/%s', $encryptedSummonerId),
            $this->getResource()
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
            "lol/league/v4/entries/{$queue->getValue()}/{$tier->getValue()}/{$division->getValue()}?page={$page}",
            $this->getResource()
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getGrandmasterLeaguesByQueue(QueueEnum $queue, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/league/v4/grandmasterleagues/by-queue/{$queue->getValue()}",
            $this->getResource()
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getById(string $leagueId, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/league/v4/leagues/%s', $leagueId),
            $this->getResource()
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getMasterLeaguesByQueue(QueueEnum $queue, RegionEnum $region): LeagueListDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/league/v4/masterleagues/by-queue/{$queue->getValue()}",
            $this->getResource()
        );

        return LeagueListDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_LEAGUE;
    }
}
