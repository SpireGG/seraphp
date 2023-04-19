<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\Deprecated\MatchEventDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\MatchEventDTO;

final class MatchEventDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'type' => 'ITEM_PURCHASED',
                'timestamp' => 9121,
                'participantId' => 7,
                'itemId' => 3340,
            ],
        ];
        $object = MatchEventDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(MatchEventDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = MatchEventDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
