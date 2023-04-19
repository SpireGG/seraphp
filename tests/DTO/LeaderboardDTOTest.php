<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\PlayerDTOCollection;
use SeraPHP\DTO\LeaderboardDTO;

final class LeaderboardDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'players' => [],
        ];
        $object = LeaderboardDTO::createFromArray($data);
        self::assertInstanceOf(PlayerDTOCollection::class, $object->getPlayers());
    }
}
