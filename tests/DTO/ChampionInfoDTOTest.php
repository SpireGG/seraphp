<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\ChampionInfoDTO;

final class ChampionInfoDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'maxNewPlayerLevel' => 10,
            'freeChampionIds' => [1, 6],
            'freeChampionIdsForNewPlayers' => [18, 81],
        ];
        $object = ChampionInfoDTO::createFromArray($data);
        self::assertSame(10, $object->getMaxNewPlayerLevel());
        self::assertSame([1, 6], $object->getFreeChampionIds());
        self::assertSame([18, 81], $object->getFreeChampionIdsForNewPlayers());
    }
}
