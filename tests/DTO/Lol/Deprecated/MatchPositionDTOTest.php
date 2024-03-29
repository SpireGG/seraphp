<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\Deprecated\MatchPositionDTO;

final class MatchPositionDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'x' => 12871,
            'y' => 2926,
        ];
        $object = MatchPositionDTO::createFromArray($data);
        self::assertSame(12871, $object->getX());
        self::assertSame(2926, $object->getY());
    }
}
