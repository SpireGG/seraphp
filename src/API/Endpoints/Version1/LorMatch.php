<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\Lor\MatchDTO;
use SeraPHP\Enum\GeoRegionEnum;

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
