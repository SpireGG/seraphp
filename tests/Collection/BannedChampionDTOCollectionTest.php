<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\BannedChampionDTOCollection;
use SeraPHP\DTO\Lol\BannedChampionDTO;

final class BannedChampionDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
