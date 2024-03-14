<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\BannedChampionDTOCollection;
use SeraPHP\Collection\CurrentGameParticipantDTOCollection;
use SeraPHP\DTO\Lol\CurrentGameInfoDTOV4;
use SeraPHP\DTO\Lol\ObserverDTO;

final class CurrentGameInfoDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'gameId' => 1234567890,
            'mapId' => 11,
            'gameMode' => 'CLASSIC',
            'gameType' => 'MATCHED_GAME',
            'gameQueueConfigId' => 440,
            'participants' => [],
            'observers' => [
                'encryptionKey' => 'XmeGhaThDcaeeJY8Gao5Z55+YJsQ80gX',
            ],
            'platformId' => 'EUN1',
            'bannedChampions' => [],
            'gameStartTime' => 1603484102577,
            'gameLength' => 403,
        ];
        $object = CurrentGameInfoDTOV4::createFromArray($data);
        self::assertSame(1234567890, $object->getGameId());
        self::assertSame(11, $object->getMapId());
        self::assertSame('CLASSIC', $object->getGameMode());
        self::assertSame('MATCHED_GAME', $object->getGameType());
        self::assertSame(440, $object->getGameQueueConfigId());
        self::assertInstanceOf(CurrentGameParticipantDTOCollection::class, $object->getParticipants());
        self::assertInstanceOf(ObserverDTO::class, $object->getObservers());
        self::assertSame('EUN1', $object->getPlatformId());
        self::assertInstanceOf(BannedChampionDTOCollection::class, $object->getBannedChampions());
        self::assertSame(1603484102577, $object->getGameStartTime());
        self::assertSame(403, $object->getGameLength());
    }
}
