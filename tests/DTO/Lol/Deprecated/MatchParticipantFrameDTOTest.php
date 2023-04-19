<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\Deprecated\MatchParticipantFrameDTO;
use SeraPHP\DTO\Lol\Deprecated\MatchPositionDTO;

final class MatchParticipantFrameDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'participantId' => 1,
            'position' => [
                'x' => 6970,
                'y' => 7157,
            ],
            'currentGold' => 441,
            'totalGold' => 941,
            'level' => 3,
            'xp' => 845,
            'minionsKilled' => 14,
            'jungleMinionsKilled' => 0,
            'dominionScore' => 0,
            'teamScore' => 0,
        ];
        $object = MatchParticipantFrameDTO::createFromArray($data);
        self::assertSame(1, $object->getParticipantId());
        self::assertSame(441, $object->getCurrentGold());
        self::assertSame(941, $object->getTotalGold());
        self::assertSame(3, $object->getLevel());
        self::assertSame(845, $object->getXp());
        self::assertSame(14, $object->getMinionsKilled());
        self::assertSame(0, $object->getJungleMinionsKilled());
        self::assertSame(0, $object->getDominionScore());
        self::assertSame(0, $object->getTeamScore());
        self::assertInstanceOf(MatchPositionDTO::class, $object->getPosition());
    }
}
