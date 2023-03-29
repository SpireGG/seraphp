<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version1;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\LeaderboardDTO;
use SeraPHPhine\Enum\GeoRegionEnum;

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
