<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol\Deprecated;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\Deprecated\TeamBansDTO;

final class TeamBansDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'championId' => 555,
            'pickTurn' => 1,
        ];
        $object = TeamBansDTO::createFromArray($data);
        self::assertSame(555, $object->getChampionId());
        self::assertSame(1, $object->getPickTurn());
    }
}
