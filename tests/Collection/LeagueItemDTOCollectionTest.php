<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\LeagueItemDTOCollection;
use SeraPHP\DTO\LeagueItemDTO;

final class LeagueItemDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
