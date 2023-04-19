<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\Deprecated\PerksDTO;

final class PerksDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'perkIds' => [
                8112,
            ],
            'perkStyle' => 8100,
            'perkSubStyle' => 8000,
        ];
        $object = PerksDTO::createFromArray($data);
        self::assertSame([8112], $object->getPerkIds());
        self::assertSame(8100, $object->getPerkStyle());
        self::assertSame(8000, $object->getPerkSubStyle());
    }
}
