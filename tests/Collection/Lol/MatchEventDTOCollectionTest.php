<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\MatchEventDTOCollection;
use SeraPHPhine\DTO\Lol\MatchEventDTO;

final class MatchEventDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
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
