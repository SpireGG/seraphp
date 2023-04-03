<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\MatchFrameDTOCollection;
use SeraPHP\DTO\Lol\MatchTimelineDTO;

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
