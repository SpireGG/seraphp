<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\PlayerDTO;

final class PlayerDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'name' => 'Player One',
            'rank' => 0,
            'lp' => 367,
        ];
        $object = PlayerDTO::createFromArray($data);
        self::assertSame('Player One', $object->getName());
        self::assertSame(0, $object->getRank());
        self::assertSame(367, $object->getLp());
    }
}
