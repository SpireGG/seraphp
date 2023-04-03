<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\ParticipantDTO;

final class ParticipantDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'teamId' => 200,
            'spell1Id' => 32,
            'spell2Id' => 4,
            'championId' => 150,
            'skinIndex' => 0,
            'profileIconId' => 7,
            'summonerName' => 'Player One',
            'bot' => false,
        ];
        $object = ParticipantDTO::createFromArray($data);
        self::assertSame(200, $object->getTeamId());
        self::assertSame(32, $object->getSpell1Id());
        self::assertSame(4, $object->getSpell2Id());
        self::assertSame(150, $object->getChampionId());
        self::assertSame(7, $object->getProfileIconId());
        self::assertSame('Player One', $object->getSummonerName());
        self::assertFalse($object->isBot());
    }
}
