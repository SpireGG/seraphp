<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\BannedChampionDTOCollection;
use SeraPHP\Collection\ParticipantDTOCollection;
use SeraPHP\DTO\Lol\FeaturedGameInfoDTO;
use SeraPHP\DTO\Lol\ObserverDTO;

final class FeaturedGameInfoDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'gameId' => 1234566789,
            'mapId' => 12,
            'gameMode' => 'ARAM',
            'gameType' => 'MATCHED_GAME',
            'gameQueueConfigId' => 450,
            'participants' => [],
            'observers' => [
                'encryptionKey' => 'abc',
            ],
            'platformId' => 'EUN1',
            'gameTypeConfigId' => 21,
            'bannedChampions' => [],
            'gameStartTime' => 1603481210724,
            'gameLength' => 348,
        ];
        $object = FeaturedGameInfoDTO::createFromArray($data);
        self::assertSame(1234566789, $object->getGameId());
        self::assertSame(12, $object->getMapId());
        self::assertSame('ARAM', $object->getGameMode());
        self::assertSame('MATCHED_GAME', $object->getGameType());
        self::assertSame(450, $object->getGameQueueConfigId());
        self::assertInstanceOf(ParticipantDTOCollection::class, $object->getParticipants());
        self::assertInstanceOf(ObserverDTO::class, $object->getObservers());
        self::assertInstanceOf(BannedChampionDTOCollection::class, $object->getBannedChampions());
        self::assertSame(1603481210724, $object->getGameStartTime());
        self::assertSame(348, $object->getGameLength());
    }
}
