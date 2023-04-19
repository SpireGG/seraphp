<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\MessageDTOCollection;
use SeraPHP\DTO\IncidentDTO;

final class IncidentDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'id' => 500,
            'active' => false,
            'created_at' => '2020-01-22T02:27:02.532Z',
            'updates' => [],
        ];
        $object = IncidentDTO::createFromArray($data);
        self::assertSame(500, $object->getId());
        self::assertFalse($object->isActive());
        self::assertSame('2020-01-22T02:27:02.532Z', $object->getCreatedAt());
        self::assertInstanceOf(MessageDTOCollection::class, $object->getUpdates());
    }
}
