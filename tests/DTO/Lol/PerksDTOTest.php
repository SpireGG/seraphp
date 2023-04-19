<?php

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\PerksDTO;
use SeraPHP\DTO\Lol\PerkStatsDTO;

class PerksDTOTest extends TestCase
{
    public const DATA = [
        'statPerks' => PerkStatsDTOTest::DATA,
        'styles' => [
            PerkStyleDTOTest::DATA_PRIMARY,
            PerkStyleDTOTest::DATA_SECONDARY,
        ],
    ];

    public function testCreateFromArray(): void
    {
        $object = PerksDTO::createFromArray(self::DATA);
        self::assertInstanceOf(PerkStatsDTO::class, $object->getStatPerks());
        self::assertCount(2, $object->getStyles());
    }
}
