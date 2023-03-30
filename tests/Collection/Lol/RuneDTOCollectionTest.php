<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\RuneDTOCollection;
use SeraPHPhine\DTO\Lol\RuneDTO;

final class RuneDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'runeId' => 1,
                'rank' => 2,
            ],
        ];
        $object = RuneDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(RuneDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = RuneDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
