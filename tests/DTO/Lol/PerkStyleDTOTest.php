<?php

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\PerkStyleDTO;

class PerkStyleDTOTest extends TestCase
{
    public const DATA_PRIMARY = [
        'description' => 'primaryStyle',
        'selections' => [
            PerkStyleSelectionDTOTest::DATA,
            ['perk' => 8009, 'var1' => 2960, 'var2' => 0, 'var3' => 0],
            ['perk' => 9103, 'var1' => 8, 'var2' => 30, 'var3' => 0],
            ['perk' => 8014, 'var1' => 434, 'var2' => 0, 'var3' => 0],
        ],
        'style' => 8000,
    ];
    public const DATA_SECONDARY = [
        'description' => 'subStyle',
        'selections' => [
            ['perk' => 8234, 'var1' => 6759, 'var2' => 0, 'var3' => 0],
            ['perk' => 8236, 'var1' => 28, 'var2' => 0, 'var3' => 0],
        ],
        'style' => 8200,
    ];

    public function testCreateFromArray(): void
    {
        $object = PerkStyleDTO::createFromArray(self::DATA_PRIMARY);
        self::assertEquals('primaryStyle', $object->getDescription());
        self::assertEquals(8000, $object->getStyle());
        self::assertCount(4, $object->getSelections());
    }
}
