<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\LeagueEntryDTO;

final class LeagueEntryDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
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
        ];
        $object = LeagueEntryDTO::createFromArray($data);
        self::assertSame('some-league-id', $object->getLeagueId());
        self::assertSame('RANKED_SOLO_5x5', $object->getQueueType());
        self::assertSame('SILVER', $object->getTier());
        self::assertSame('I', $object->getRank());
        self::assertSame('some-summoner-id', $object->getSummonerId());
        self::assertSame('Player One', $object->getSummonerName());
        self::assertSame(5, $object->getLeaguePoints());
        self::assertSame(34, $object->getWins());
        self::assertSame(35, $object->getLosses());
        self::assertFalse($object->isVeteran());
        self::assertFalse($object->isInactive());
        self::assertFalse($object->isFreshBlood());
        self::assertFalse($object->isHotStreak());
        self::assertNull($object->getMiniSeries());
    }
}
