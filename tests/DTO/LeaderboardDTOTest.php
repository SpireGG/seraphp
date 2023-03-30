<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\PlayerDTOCollection;
use SeraPHPhine\DTO\LeaderboardDTO;

final class LeaderboardDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'players' => [],
        ];
        $object = LeaderboardDTO::createFromArray($data);
        self::assertInstanceOf(PlayerDTOCollection::class, $object->getPlayers());
    }
}
