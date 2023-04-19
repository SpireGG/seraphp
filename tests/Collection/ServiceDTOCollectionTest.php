<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\ServiceDTOCollection;
use SeraPHP\DTO\ServiceDTO;

final class ServiceDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'name' => 'Game',
                'slug' => 'game',
                'status' => 'online',
                'incidents' => [],
            ],
        ];
        $object = ServiceDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(ServiceDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = ServiceDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
