<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\TeamDTOCollection;
use SeraPHP\DTO\Lol\InfoDTO;

final class InfoDTOTest extends TestCase
{
    public const DATA = [
        'gameCreation' => 1681822570112,
        'gameDuration' => 1135,
        'gameEndTimestamp' => 1681823717830,
        'gameId' => 6365913977,
        'gameMode' => 'ARAM',
        'gameName' => 'teambuilder-match-6365913977',
        'gameStartTimestamp' => 1681822582414,
        'gameType' => 'MATCHED_GAME',
        'gameVersion' => '13.7.503.1019',
        'mapId' => 12,
        'participants' => [
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
            ParticipantDTOTest::DATA,
        ],
        'platformId' => 'EUW1',
        'queueId' => 450,
        'teams' => [TeamDTOTest::DATA, TeamDTOTest::DATA],
        'tournamentCode' => '',
    ];

    public function testCreateFromArray(): void
    {
        $object = InfoDTO::createFromArray(self::DATA);
        self::assertEquals(1681822570112, $object->getGameCreation());
        self::assertEquals(1135, $object->getGameDuration());
        self::assertEquals(1681823717830, $object->getGameEndTimestamp());
        self::assertEquals(6365913977, $object->getGameId());
        self::assertEquals('ARAM', $object->getGameMode());
        self::assertEquals('teambuilder-match-6365913977', $object->getGameName());
        self::assertEquals(1681822582414, $object->getGameStartTimestamp());
        self::assertEquals('MATCHED_GAME', $object->getGameType());
        self::assertEquals('13.7.503.1019', $object->getGameVersion());
        self::assertEquals(12, $object->getMapId());
        self::assertInstanceOf(TeamDTOCollection::class, $object->getTeams());
        self::assertCount(10, $object->getParticipants());
    }
}
