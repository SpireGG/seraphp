<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API\Endpoints\Version4;

use SeraPHP\API\Endpoints\Version4\League;
use SeraPHP\Collection\LeagueEntryDTOCollection;
use SeraPHP\DTO\LeagueListDTO;
use SeraPHP\Enum\DivisionEnum;
use SeraPHP\Enum\QueueEnum;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Enum\TierEnum;
use SeraPHP\Tests\APITestCase;

final class LeagueTest extends APITestCase
{
    public function testGetChallengerLeaguesByQueueReturnsProperObjectOnSuccess(): void
    {
        $league = new League($this->createObjectConnectionMock(
            'lol/league/v4/challengerleagues/by-queue/RANKED_SOLO_5x5',
            [
                'tier' => 'CHALLENGER',
                'leagueId' => '12345678-1ba0-3357-829e-4793b7be8601',
                'queue' => 'RANKED_SOLO_5x5',
                'name' => "Renekton's Maulers",
                'entries' => [],
            ],
            'eun1',
        ));
        $result = $league->getChallengerLeaguesByQueue(QueueEnum::RANKED_SOLO_5x5(), RegionEnum::EUN1());
        self::assertInstanceOf(LeagueListDTO::class, $result);
    }

    public function testGetBySummonerIdReturnsProperObjectOnSuccess(): void
    {
        $league = new League($this->createObjectConnectionMock(
            'lol/league/v4/entries/by-summoner/1',
            [
                [
                    'leagueId' => 'some-league-id',
                    'queueType' => 'RANKED_SOLO_5x5',
                    'tier' => 'SILVER',
                    'rank' => 'I',
                    'summonerId' => 'some-summoner-id',
                    'summonerName' => 'Player One',
                    'leaguePoints' => 5,
                    'wins' => 34,
                    'losses' => 35,
                    'veteran' => false,
                    'inactive' => false,
                    'freshBlood' => false,
                    'hotStreak' => false,
                ],
            ],
            'eun1',
        ));
        $result = $league->getBySummonerId('1', RegionEnum::EUN1());
        self::assertInstanceOf(LeagueEntryDTOCollection::class, $result);
    }

    public function testGetByQueueAndTierAndDivisionReturnsProperObjectOnSuccess(): void
    {
        $league = new League($this->createObjectConnectionMock(
            'lol/league/v4/entries/RANKED_SOLO_5x5/DIAMOND/II?page=2',
            [
                [
                    'leagueId' => 'some-league-id',
                    'queueType' => 'RANKED_SOLO_5x5',
                    'tier' => 'SILVER',
                    'rank' => 'I',
                    'summonerId' => 'some-summoner-id',
                    'summonerName' => 'Player One',
                    'leaguePoints' => 5,
                    'wins' => 34,
                    'losses' => 35,
                    'veteran' => false,
                    'inactive' => false,
                    'freshBlood' => false,
                    'hotStreak' => false,
                ],
            ],
            'eun1',
        ));
        $result = $league->getByQueueAndTierAndDivision(
            QueueEnum::RANKED_SOLO_5x5(),
            TierEnum::DIAMOND(),
            DivisionEnum::II(),
            RegionEnum::EUN1(),
            2
        );
        self::assertInstanceOf(LeagueEntryDTOCollection::class, $result);
    }

    public function testGetGrandmasterLeaguesByQueueReturnsProperObjectOnSuccess(): void
    {
        $league = new League($this->createObjectConnectionMock(
            'lol/league/v4/grandmasterleagues/by-queue/RANKED_SOLO_5x5',
            [
                'tier' => 'GRANDMASTER',
                'leagueId' => '12345678-1ba0-3357-829e-4793b7be8601',
                'queue' => 'RANKED_SOLO_5x5',
                'name' => "Renekton's Maulers",
                'entries' => [],
            ],
            'eun1',
        ));
        $result = $league->getGrandmasterLeaguesByQueue(QueueEnum::RANKED_SOLO_5x5(), RegionEnum::EUN1());
        self::assertInstanceOf(LeagueListDTO::class, $result);
    }

    public function testGeyByIdReturnsProperObjectOnSuccess(): void
    {
        $league = new League($this->createObjectConnectionMock(
            'lol/league/v4/leagues/1',
            [
                'tier' => 'GRANDMASTER',
                'leagueId' => '12345678-1ba0-3357-829e-4793b7be8601',
                'queue' => 'RANKED_SOLO_5x5',
                'name' => "Renekton's Maulers",
                'entries' => [],
            ],
            'eun1',
        ));
        $result = $league->getById(
            '1',
            RegionEnum::EUN1(),
        );
        self::assertInstanceOf(LeagueListDTO::class, $result);
    }

    public function testGetMasterLeaguesByQueueReturnsProperObjectOnSuccess(): void
    {
        $league = new League($this->createObjectConnectionMock(
            'lol/league/v4/masterleagues/by-queue/RANKED_SOLO_5x5',
            [
                'tier' => 'GRANDMASTER',
                'leagueId' => '12345678-1ba0-3357-829e-4793b7be8601',
                'queue' => 'RANKED_SOLO_5x5',
                'name' => "Renekton's Maulers",
                'entries' => [],
            ],
            'eun1',
        ));
        $result = $league->getMasterLeaguesByQueue(QueueEnum::RANKED_SOLO_5x5(), RegionEnum::EUN1());
        self::assertInstanceOf(LeagueListDTO::class, $result);
    }
}
