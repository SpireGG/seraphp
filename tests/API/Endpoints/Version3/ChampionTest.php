<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API\Endpoints\Version3;

use SeraPHP\API\Endpoints\Version3\Champion;
use SeraPHP\DTO\ChampionInfoDTO;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Tests\APITestCase;

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
