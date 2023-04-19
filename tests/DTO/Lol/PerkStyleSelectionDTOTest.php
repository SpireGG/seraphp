<?php

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\PerkStyleSelectionDTO;

class PerkStyleSelectionDTOTest extends TestCase
{
    public const DATA = [
        'perk' => 8021,
        'var1' => 2829,
        'var2' => 2349,
        'var3' => 0,
    ];

    public function testCreateFromArray(): void
    {
        $object = PerkStyleSelectionDTO::createFromArray(self::DATA);
        self::assertEquals(8021, $object->getPerk());
        self::assertEquals(2829, $object->getVar1());
        self::assertEquals(2349, $object->getVar2());
        self::assertEquals(0, $object->getVar3());
    }
}
