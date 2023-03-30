<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version1;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\Tft\MatchDTO;
use SeraPHPhine\Enum\GeoRegionEnum;

final class TftMatch extends AbstractApi
{
    /**
     * @return array<string>
     */
    public function getByPuuid(string $puuid, GeoRegionEnum $geoRegion, int $count = 20): array
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('tft/match/v1/matches/by-puuid/%s/ids?count=%d', $puuid, $count)
        );

        return $response->getBodyContentsDecodedAsArray();
    }

    public function getById(string $matchId, GeoRegionEnum $geoRegion): MatchDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('tft/match/v1/matches/%s', $matchId),
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
