<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\IncidentDTOCollection;
use SeraPHPhine\DTO\IncidentDTO;

final class IncidentDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'id' => 500,
                'active' => false,
                'created_at' => '2020-01-22T02:27:02.532Z',
                'updates' => [],
            ],
        ];
        $object = IncidentDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(IncidentDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = IncidentDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
