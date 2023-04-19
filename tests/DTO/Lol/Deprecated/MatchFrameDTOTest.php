<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\Deprecated\MatchEventDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\MatchFrameDTO;
use SeraPHP\DTO\Lol\Deprecated\MatchParticipantFrameDTO;

final class MatchFrameDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'participantFrames' => [
                'a' => [
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
                ],
            ],
            'events' => [],
            'timestamp' => 180075,
        ];
        $object = MatchFrameDTO::createFromArray($data);
        self::assertSame(180075, $object->getTimestamp());
        self::assertIsArray($object->getParticipantFrames());
        self::assertArrayHasKey('a', $object->getParticipantFrames());
        self::assertInstanceOf(MatchParticipantFrameDTO::class, $object->getParticipantFrames()['a']);
        self::assertInstanceOf(MatchEventDTOCollection::class, $object->getEvents());
    }
}
