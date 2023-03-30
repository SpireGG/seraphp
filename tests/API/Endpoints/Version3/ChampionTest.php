<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version3;

use SeraPHPhine\API\Endpoints\Version3\Champion;
use SeraPHPhine\DTO\ChampionInfoDTO;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class ChampionTest extends APITestCase
{
    public function testGetByPuuidReturnsAccountDTOOnSuccess(): void
    {
        $champion = new Champion($this->createObjectConnectionMock(
            'lol/platform/v3/champion-rotations',
            [
                'maxNewPlayerLevel' => 10,
                'freeChampionIds' => [1, 6],
                'freeChampionIdsForNewPlayers' => [18, 81],
            ]
        ));
        $result = $champion->getChampionRotations(RegionEnum::EUN1());
        self::assertInstanceOf(ChampionInfoDTO::class, $result);
    }
}
