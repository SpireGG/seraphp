<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\Deprecated\RuneDTO;

final class RuneDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'runeId' => 1,
            'rank' => 2,
        ];
        $object = RuneDTO::createFromArray($data);
        self::assertEquals(1, $object->getRuneId());
        self::assertEquals(2, $object->getRank());
    }
}
