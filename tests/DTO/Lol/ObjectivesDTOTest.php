<?php

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\ObjectiveDTO;
use SeraPHP\DTO\Lol\ObjectivesDTO;

class ObjectivesDTOTest extends TestCase
{
    public const DATA = [
        'baron' => ['first' => false, 'kills' => 0],
        'champion' => ObjectiveDTOTest::DATA,
        'dragon' => ['first' => false, 'kills' => 0],
        'inhibitor' => ['first' => false, 'kills' => 0],
        'riftHerald' => ['first' => false, 'kills' => 0],
        'tower' => ['first' => false, 'kills' => 1],
    ];

    public function testCreateFromArray(): void
    {
        $object = ObjectivesDTO::createFromArray(self::DATA);
        self::assertInstanceOf(ObjectiveDTO::class, $object->getTower());
        self::assertEquals(1, $object->getTower()->getKills());
        self::assertFalse($object->getTower()->isFirst());
    }
}
