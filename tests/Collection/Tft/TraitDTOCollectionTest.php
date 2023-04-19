<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Tft;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Tft\TraitDTOCollection;
use SeraPHP\DTO\Tft\TraitDTO;

final class TraitDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
