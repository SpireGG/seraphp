<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Tft;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Tft\UnitDTOCollection;
use SeraPHPhine\DTO\Tft\UnitDTO;

final class UnitDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'character_id' => 'TFT4_Elise',
                'items' => [
                    8,
                ],
                'name' => '',
                'rarity' => 0,
                'tier' => 1,
            ],
        ];
        $object = UnitDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(UnitDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = UnitDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
