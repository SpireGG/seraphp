<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\FeaturedGameInfoDTOCollection;
use SeraPHP\DTO\Lol\FeaturedGameInfoDTO;

final class FeaturedGameInfoDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
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
            ],
        ];
        $object = FeaturedGameInfoDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(FeaturedGameInfoDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = FeaturedGameInfoDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
