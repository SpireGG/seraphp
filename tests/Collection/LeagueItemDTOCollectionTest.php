<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\LeagueItemDTOCollection;
use SeraPHPhine\DTO\LeagueItemDTO;

final class LeagueItemDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'summonerId' => 'mVDHOBK6Z0NdeiQ7sdshT6M-Cm7eKx3Pi-vGD1WB0OI7dRk',
                'summonerName' => 'Hyrav v2',
                'leaguePoints' => 899,
                'rank' => 'I',
                'wins' => 269,
                'losses' => 146,
                'veteran' => true,
                'inactive' => false,
                'freshBlood' => false,
                'hotStreak' => false,
            ],
        ];
        $object = LeagueItemDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(LeagueItemDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = LeagueItemDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
