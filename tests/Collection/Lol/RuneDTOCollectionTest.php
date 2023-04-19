<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\Deprecated\RuneDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\RuneDTO;

final class RuneDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
