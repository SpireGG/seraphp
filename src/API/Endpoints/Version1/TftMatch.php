<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\Tft\MatchDTO;
use SeraPHP\Enum\GeoRegionEnum;

final class TftMatch extends AbstractApi
{
    /**
     * @return array<string>
     */
    public function getByPuuid(string $puuid, GeoRegionEnum $geoRegion, int $count = 20): array
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('tft/match/v1/matches/by-puuid/%s/ids?count=%d', $puuid, $count),
            $this->getResource()
        );

        return $response->getBodyContentsDecodedAsArray();
    }

    public function getById(string $matchId, GeoRegionEnum $geoRegion): MatchDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('tft/match/v1/matches/%s', $matchId),
            $this->getResource()
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return 'val';
    }
}
