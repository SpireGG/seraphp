<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\MatchReferenceDTOCollection;
use SeraPHP\DTO\Lol\MatchlistDTO;

final class MatchlistDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
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
