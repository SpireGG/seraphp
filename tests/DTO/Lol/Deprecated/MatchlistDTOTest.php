<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\MatchReferenceDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\MatchlistDTO;

final class MatchlistDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'matches' => [],
            'startIndex' => 0,
            'endIndex' => 100,
            'totalGames' => 169,
        ];
        $object = MatchlistDTO::createFromArray($data);
        self::assertInstanceOf(MatchReferenceDTOCollection::class, $object->getMatches());
        self::assertSame(0, $object->getStartIndex());
        self::assertSame(100, $object->getEndIndex());
        self::assertSame(169, $object->getTotalGames());
    }
}
