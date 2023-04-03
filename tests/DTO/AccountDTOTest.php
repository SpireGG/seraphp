<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\AccountDTO;

final class AccountDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'puuid' => 'a1',
            'gameName' => 'b2',
            'tagLine' => 'EUNE',
        ];
        $object = AccountDTO::createFromArray($data);
        self::assertEquals('a1', $object->getPuuid());
        self::assertEquals('b2', $object->getGameName());
        self::assertEquals('EUNE', $object->getTagLine());
    }

    public function testCreateFromArrayHandlesMissingPropertiesProperly(): void
    {
        $data = [
            'puuid' => 'a1',
        ];
        $object = AccountDTO::createFromArray($data);
        self::assertEquals('a1', $object->getPuuid());
        self::assertNull($object->getGameName());
        self::assertNull($object->getTagLine());
    }
}
