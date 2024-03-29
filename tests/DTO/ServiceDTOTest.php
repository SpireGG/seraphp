<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\IncidentDTOCollection;
use SeraPHP\DTO\ServiceDTO;

final class ServiceDTOTest extends TestCase
{
    public function testCreateFromArray(): void
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
