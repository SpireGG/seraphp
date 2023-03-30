<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\IncidentDTOCollection;
use SeraPHPhine\DTO\ServiceDTO;

final class ServiceDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'name' => 'Game',
            'slug' => 'game',
            'status' => 'online',
            'incidents' => [],
        ];
        $object = ServiceDTO::createFromArray($data);
        self::assertSame('Game', $object->getName());
        self::assertSame('game', $object->getSlug());
        self::assertSame('online', $object->getStatus());
        self::assertInstanceOf(IncidentDTOCollection::class, $object->getIncidents());
    }
}
