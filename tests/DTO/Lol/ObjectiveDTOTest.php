<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\ObjectiveDTO;

class ObjectiveDTOTest extends TestCase
{
    public const DATA = [
        'first' => false,
        'kills' => 58,
    ];

    public function testCreateFromArray(): void
    {
        $object = ObjectiveDTO::createFromArray(self::DATA);
        self::assertFalse($object->isFirst());
        self::assertEquals(58, $object->getKills());
    }
}
