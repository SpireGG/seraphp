<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\MasteryDTOCollection;
use SeraPHPhine\DTO\Lol\MasteryDTO;

final class MasteryDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'rank' => 1,
                'masteryId' => 2,
            ],
        ];
        $object = MasteryDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(MasteryDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = MasteryDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
