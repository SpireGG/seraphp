<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\TeamDTO;

final class TeamDTOTest extends TestCase
{
    public const DATA = [
        'bans' => [BanDTOTest::DATA, BanDTOTest::DATA, BanDTOTest::DATA, BanDTOTest::DATA],
        'objectives' => ObjectivesDTOTest::DATA,
        'teamId' => 100,
        'win' => false,
    ];

    public function testCreateFromArray(): void
    {
        $object = TeamDTO::createFromArray(self::DATA);
        self::assertEquals(4, $object->getBans()->count());
        self::assertEquals(100, $object->getTeamId());
        self::assertFalse($object->isWin());
    }
}
