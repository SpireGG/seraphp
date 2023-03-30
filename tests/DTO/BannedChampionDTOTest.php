<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\DTO\BannedChampionDTO;

final class BannedChampionDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'pickTurn' => 1,
            'championId' => 2,
            'teamId' => 3,
        ];
        $object = BannedChampionDTO::createFromArray($data);
        self::assertEquals(1, $object->getPickTurn());
        self::assertEquals(2, $object->getChampionId());
        self::assertEquals(3, $object->getTeamId());
    }
}
