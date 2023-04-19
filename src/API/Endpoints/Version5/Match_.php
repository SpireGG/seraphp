<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version5;

use SeraPHP\API\AbstractApi;
use SeraPHP\Enum\GeoRegionEnum;
use SeraPHP\Enum\RegionEnum;

final class Match_ extends AbstractApi
{
    public const RESOURCE_MATCH = '1530:match';

    public function getMatchIdsByPUUID(
        string $puuid,
        GeoRegionEnum $region,
        int $queue = null,
        string $type = null,
        int $start = null,
        int $count = null,
        int $startTime = null,
        int $endTime = null
    ): array {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf("/lol/match/v5/matches/by-puuid/{$puuid}/ids?%s", http_build_query([
                'queue' => $queue,
                'type' => $type,
                'start' => $start,
                'count' => $count,
                'startTime' => $startTime,
                'endTime' => $endTime,
            ])),
            $this->getResource()
        );

        return $response->getBodyContentsDecodedAsArray();
    }

    public function getMatch(string $match_id, RegionEnum $region)
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/match/v5/matches/{$match_id}",
            $this->getResource()
        );

        return MatchDTO::createFromArray();
    }

    protected function getResource(): string
    {
        return self::RESOURCE_MATCH;
    }
}
