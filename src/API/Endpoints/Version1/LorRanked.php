<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\LeaderboardDTO;
use SeraPHP\Enum\GeoRegionEnum;

final class LorRanked extends AbstractApi
{
    public function getLeaderboards(GeoRegionEnum $geoRegion): LeaderboardDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            'lor/ranked/v1/leaderboards',
        );

        return LeaderboardDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
