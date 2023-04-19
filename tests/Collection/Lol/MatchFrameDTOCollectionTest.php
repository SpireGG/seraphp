<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\Deprecated\MatchFrameDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\MatchFrameDTO;

final class MatchFrameDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
