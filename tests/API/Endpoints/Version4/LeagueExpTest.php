<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API\Endpoints\Version4;

use SeraPHP\API\Endpoints\Version4\LeagueExp;
use SeraPHP\Collection\LeagueEntryDTOCollection;
use SeraPHP\Enum\DivisionEnum;
use SeraPHP\Enum\QueueEnum;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Enum\TierExpEnum;
use SeraPHP\Tests\APITestCase;

final class LeagueExpTest extends APITestCase
{
    public function testGetByQueueAndTierAndDivisionReturnsProperObjectOnSuccess(): void
    {
        $league = new LeagueExp($this->createObjectConnectionMock(
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
            TierExpEnum::DIAMOND(),
            DivisionEnum::II(),
            RegionEnum::EUN1(),
            2
        );
        self::assertInstanceOf(LeagueEntryDTOCollection::class, $result);
    }
}
