<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\ActiveShardDTO;

final class ActiveShardDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'puuid' => 'a1',
            'game' => 'b2',
            'activeShard' => 'c3',
        ];
        $object = ActiveShardDTO::createFromArray($data);
        self::assertEquals('a1', $object->getPuuid());
        self::assertEquals('b2', $object->getGame());
        self::assertEquals('c3', $object->getActiveShard());
    }
}
