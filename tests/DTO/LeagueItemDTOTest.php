<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\LeagueItemDTO;

final class LeagueItemDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'summonerId' => 'some-summoner-id',
            'summonerName' => 'Player One',
            'leaguePoints' => 143,
            'rank' => 'I',
            'wins' => 677,
            'losses' => 608,
            'veteran' => false,
            'inactive' => false,
            'freshBlood' => false,
            'hotStreak' => false,
        ];
        $object = LeagueItemDTO::createFromArray($data);
        self::assertSame('some-summoner-id', $object->getSummonerId());
        self::assertSame('Player One', $object->getSummonerName());
        self::assertSame(143, $object->getLeaguePoints());
        self::assertSame('I', $object->getRank());
        self::assertSame(677, $object->getWins());
        self::assertSame(608, $object->getLosses());
        self::assertFalse($object->isVeteran());
        self::assertFalse($object->isInactive());
        self::assertFalse($object->isFreshBlood());
        self::assertFalse($object->isHotStreak());
        self::assertNull($object->getMiniSeries());
    }
}
