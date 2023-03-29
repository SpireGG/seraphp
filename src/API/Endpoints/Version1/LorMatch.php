<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version1;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\Lor\MatchDTO;
use SeraPHPhine\Enum\GeoRegionEnum;

final class LorMatch extends AbstractApi
{
    public function getIdsByPuuid(string $puuid, GeoRegionEnum $geoRegion): array
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('lor/match/v1/matches/by-puuid/%s/ids', $puuid),
        );

        return $response->getBodyContentsDecodedAsArray();
    }

    public function getById(string $matchId, GeoRegionEnum $geoRegion): MatchDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('lor/match/v1/matches/%s', $matchId),
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
