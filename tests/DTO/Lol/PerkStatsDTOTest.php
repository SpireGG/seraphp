<?php

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\PerkStatsDTO;

class PerkStatsDTOTest extends TestCase
{
    public const DATA = [
        'defense' => 5001,
        'flex' => 5002,
        'offense' => 5005,
    ];

    public function testCreateFromArray(): void
    {
        $object = PerkStatsDTO::createFromArray(self::DATA);
        self::assertEquals(5001, $object->getDefense());
        self::assertEquals(5002, $object->getFlex());
        self::assertEquals(5005, $object->getOffense());
    }
}
