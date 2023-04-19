<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\BanDTO;

final class BanDTOTest extends TestCase
{
    public const DATA = [
        'championId' => 12,
        'pickTurn' => 1,
    ];

    public function testCreateFromArray(): void
    {
        $object = BanDTO::createFromArray(self::DATA);
        self::assertEquals(12, $object->getChampionId());
        self::assertEquals(1, $object->getPickTurn());
    }
}
