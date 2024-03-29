<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\StatusDTOCollection;
use SeraPHP\DTO\StatusDTO;

final class StatusDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'id' => 2163,
                'platforms' => [
                    'windows',
                    'macos',
                ],
                'incident_severity' => null,
                'updates' => [],
                'created_at' => '2020-11-08T01:25:00.404387+00:00',
                'archive_at' => null,
                'titles' => [],
                'maintenance_status' => 'scheduled',
                'updated_at' => null,
            ],
        ];
        $object = StatusDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(StatusDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = StatusDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
