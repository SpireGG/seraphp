<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\MatchReferenceDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\MatchReferenceDTO;

final class MatchReferenceDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'platformId' => 'EUN1',
                'gameId' => 1234567890,
                'champion' => 67,
                'queue' => 400,
                'season' => 13,
                'timestamp' => 1589831548235,
                'role' => 'DUO_CARRY',
                'lane' => 'BOTTOM',
            ],
        ];
        $object = MatchReferenceDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(MatchReferenceDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = MatchReferenceDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
