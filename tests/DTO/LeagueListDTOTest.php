<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\LeagueItemDTOCollection;
use SeraPHP\DTO\LeagueListDTO;

final class LeagueListDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'tier' => 'CHALLENGER',
            'leagueId' => '12345678-1ba0-3357-829e-4793b7be8601',
            'queue' => 'RANKED_SOLO_5x5',
            'name' => "Renekton's Maulers",
            'entries' => [],
        ];
        $object = LeagueListDTO::createFromArray($data);
        self::assertSame('CHALLENGER', $object->getTier());
        self::assertSame('12345678-1ba0-3357-829e-4793b7be8601', $object->getLeagueId());
        self::assertSame('RANKED_SOLO_5x5', $object->getQueue());
        self::assertSame("Renekton's Maulers", $object->getName());
        self::assertInstanceOf(LeagueItemDTOCollection::class, $object->getEntries());
    }
}
