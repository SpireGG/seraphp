<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\BannedChampionDTOCollection;
use SeraPHPhine\DTO\BannedChampionDTO;

final class BannedChampionDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'pickTurn' => 1,
                'championId' => 2,
                'teamId' => 3,
            ],
        ];
        $object = BannedChampionDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(BannedChampionDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = BannedChampionDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
