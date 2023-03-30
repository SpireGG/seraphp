<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\MatchFrameDTOCollection;
use SeraPHPhine\DTO\Lol\MatchFrameDTO;

final class MatchFrameDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'participantFrames' => [],
                'events' => [],
                'timestamp' => 180075,
            ],
        ];
        $object = MatchFrameDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(MatchFrameDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = MatchFrameDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
