<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\MatchFrameDTOCollection;
use SeraPHPhine\DTO\Lol\MatchTimelineDTO;

final class MatchTimelineDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'frames' => [],
            'frameInterval' => 60000,
        ];
        $object = MatchTimelineDTO::createFromArray($data);
        self::assertInstanceOf(MatchFrameDTOCollection::class, $object->getFrames());
        self::assertSame(60000, $object->getFrameInterval());
    }
}
