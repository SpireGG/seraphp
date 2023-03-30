<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\StatusDTOCollection;
use SeraPHPhine\DTO\PlatformDataDTO;

final class PlatformDataDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'id' => 'EUN1',
            'name' => 'EU Nordic & East',
            'locales' => [
                'pl_PL',
            ],
            'maintenances' => [],
            'incidents' => [],
        ];
        $object = PlatformDataDTO::createFromArray($data);
        self::assertSame('EUN1', $object->getId());
        self::assertSame('EU Nordic & East', $object->getName());
        self::assertIsArray($object->getLocales());
        self::assertCount(1, $object->getLocales());
        self::assertSame('pl_PL', $object->getLocales()[0]);
        self::assertInstanceOf(StatusDTOCollection::class, $object->getMaintenances());
        self::assertEmpty($object->getMaintenances());
        self::assertInstanceOf(StatusDTOCollection::class, $object->getIncidents());
        self::assertEmpty($object->getIncidents());
    }
}
