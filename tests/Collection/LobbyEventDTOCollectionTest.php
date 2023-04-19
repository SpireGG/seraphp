<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\LobbyEventDTOCollection;
use SeraPHP\DTO\LobbyEventDTO;

final class LobbyEventDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'timestamp' => '1234567890000',
                'eventType' => 'PracticeGameCreatedEvent',
                'summonerId' => '3',
            ],
        ];
        $object = LobbyEventDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(LobbyEventDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = LobbyEventDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
