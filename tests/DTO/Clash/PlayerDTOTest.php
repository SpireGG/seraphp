<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Clash;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\DTO\Clash\PlayerDTO;
use SeraPHPhine\Enum\PositionEnum;
use SeraPHPhine\Enum\TeamRoleEnum;

final class PlayerDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'summonerId' => '1',
            'teamId' => '2',
            'position' => 'FILL',
            'role' => 'CAPTAIN',
        ];
        $object = PlayerDTO::createFromArray($data);
        self::assertSame('1', $object->getSummonerId());
        self::assertSame('2', $object->getTeamId());
        self::assertInstanceOf(PositionEnum::class, $object->getPosition());
        self::assertSame('FILL', $object->getPosition()->getValue());
        self::assertInstanceOf(TeamRoleEnum::class, $object->getRole());
        self::assertSame('CAPTAIN', $object->getRole()->getValue());
    }
}
