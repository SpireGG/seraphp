<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\DTO\Lol\RuneDTO;

final class RuneDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
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
