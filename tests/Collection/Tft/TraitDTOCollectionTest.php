<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Tft;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Tft\TraitDTOCollection;
use SeraPHPhine\DTO\Tft\TraitDTO;

final class TraitDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'name' => 'Duelist',
                'num_units' => 1,
                'style' => 0,
                'tier_current' => 2,
                'tier_total' => 3,
            ],
        ];
        $object = TraitDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(TraitDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = TraitDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
