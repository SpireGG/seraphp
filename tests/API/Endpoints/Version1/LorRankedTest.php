<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API\Endpoints\Version1;

use SeraPHP\API\Endpoints\Version1\LorRanked;
use SeraPHP\DTO\LeaderboardDTO;
use SeraPHP\Enum\GeoRegionEnum;
use SeraPHP\Tests\APITestCase;

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
