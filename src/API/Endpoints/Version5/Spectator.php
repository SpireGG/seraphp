<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version5;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\Lol\CurrentGameInfoDTO;
use SeraPHP\DTO\Lol\FeaturedGamesDTO;
use SeraPHP\Enum\RegionEnum;

final class Spectator extends AbstractApi
{
    public const RESOURCE_SPECTATOR = '1419:spectator';

    public function getActiveGamesBySummonerPUUID(string $encryptedPUUID, RegionEnum $region): CurrentGameInfoDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "/lol/spectator/v5/active-games/by-summoner/{$encryptedPUUID}",
            $this->getResource()
        );

        return CurrentGameInfoDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getFeaturedGames(RegionEnum $region): FeaturedGamesDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/spectator/v5/featured-games',
            $this->getResource()
        );

        return FeaturedGamesDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_SPECTATOR;
    }
}
