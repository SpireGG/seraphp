<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\MiniSeriesDTO;

final class MiniSeriesDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'losses' => 1,
            'progress' => 'WNN',
            'target' => 2,
            'wins' => 3,
        ];
        $object = MiniSeriesDTO::createFromArray($data);
        self::assertSame(1, $object->getLosses());
        self::assertSame('WNN', $object->getProgress());
        self::assertSame(2, $object->getTarget());
        self::assertSame(3, $object->getWins());
    }
}
