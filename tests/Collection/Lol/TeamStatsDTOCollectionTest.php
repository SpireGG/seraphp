<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\TeamStatsDTOCollection;
use SeraPHPhine\DTO\Lol\TeamStatsDTO;

final class TeamStatsDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'teamId' => 100,
                'win' => 'Win',
                'firstBlood' => false,
                'firstTower' => false,
                'firstInhibitor' => true,
                'firstBaron' => false,
                'firstDragon' => true,
                'firstRiftHerald' => true,
                'towerKills' => 11,
                'inhibitorKills' => 3,
                'baronKills' => 0,
                'dragonKills' => 4,
                'vilemawKills' => 0,
                'riftHeraldKills' => 1,
                'dominionVictoryScore' => 0,
                'bans' => [],
            ],
        ];
        $object = TeamStatsDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(TeamStatsDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = TeamStatsDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
