<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version1;

use SeraPHPhine\API\Endpoints\Version1\LorRanked;
use SeraPHPhine\DTO\LeaderboardDTO;
use SeraPHPhine\Enum\GeoRegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class LorRankedTest extends APITestCase
{
    public function testGetLeaderboardsReturnsAccountDTOOnSuccess(): void
    {
        $lorRanked = new LorRanked($this->createObjectConnectionMock(
            'lor/ranked/v1/leaderboards',
            [
                'players' => [],
            ],
            'europe',
        ));
        $result = $lorRanked->getLeaderboards(GeoRegionEnum::EUROPE());
        self::assertInstanceOf(LeaderboardDTO::class, $result);
    }
}
