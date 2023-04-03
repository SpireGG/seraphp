<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API\Endpoints\Version4;

use SeraPHP\API\Endpoints\Version4\ChampionMastery;
use SeraPHP\Collection\ChampionMasteryDTOCollection;
use SeraPHP\DTO\ChampionMasteryDTO;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Tests\APITestCase;

final class ChampionMasteryTest extends APITestCase
{
    public function testGetBySummonerIdReturnsEmptyCollectionOnEmptyArray(): void
    {
        $championMastery = new ChampionMastery($this->createObjectConnectionMock(
            'lol/champion-mastery/v4/champion-masteries/by-summoner/1',
            [],
            'eun1',
        ));
        $result = $championMastery->getBySummonerId('1', RegionEnum::EUN1());
        self::assertInstanceOf(ChampionMasteryDTOCollection::class, $result);
        self::assertTrue($result->isEmpty());
    }

    public function testGetBySummonerIdReturnsCollectionOnSuccess(): void
    {
        $championMastery = new ChampionMastery($this->createObjectConnectionMock(
            'lol/champion-mastery/v4/champion-masteries/by-summoner/1',
            [
                [
                    'championId' => 80,
                    'championLevel' => 1,
                    'championPoints' => 719,
                    'lastPlayTime' => 1581627749000,
                    'championPointsSinceLastLevel' => 719,
                    'championPointsUntilNextLevel' => 1081,
                    'chestGranted' => false,
                    'tokensEarned' => 0,
                    'summonerId' => 'some_id',
                ],
            ],
            'eun1',
        ));
        $result = $championMastery->getBySummonerId('1', RegionEnum::EUN1());
        self::assertInstanceOf(ChampionMasteryDTOCollection::class, $result);
        self::assertFalse($result->isEmpty());
        self::assertInstanceOf(ChampionMasteryDTO::class, $result->offsetGet(0));
    }

    public function testGetBySummonerIdAndChampionIdReturnsAccountDTOOnSuccess(): void
    {
        $championMastery = new ChampionMastery($this->createObjectConnectionMock(
            'lol/champion-mastery/v4/champion-masteries/by-summoner/1/by-champion/2',
            [
                'championId' => 80,
                'championLevel' => 1,
                'championPoints' => 719,
                'lastPlayTime' => 1581627749000,
                'championPointsSinceLastLevel' => 719,
                'championPointsUntilNextLevel' => 1081,
                'chestGranted' => false,
                'tokensEarned' => 0,
                'summonerId' => 'some_id',
            ],
            'eun1',
        ));
        $result = $championMastery->getBySummonerIdAndChampionId('1', 2, RegionEnum::EUN1());
        self::assertInstanceOf(ChampionMasteryDTO::class, $result);
    }

    public function testGetScoreBySummonerIdReturnsActiveShardDTOOnSuccess(): void
    {
        $championMastery = new ChampionMastery($this->createIntConnectionMock(
            'lol/champion-mastery/v4/scores/by-summoner/1',
            136,
            'eun1',
        ));
        $result = $championMastery->getScoreBySummonerId('1', RegionEnum::EUN1());
        self::assertSame(136, $result);
    }
}
