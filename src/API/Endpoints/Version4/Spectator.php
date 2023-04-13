<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\CurrentGameInfoDTO;
use SeraPHP\DTO\FeaturedGamesDTO;
use SeraPHP\Enum\RegionEnum;

final class Spectator extends AbstractApi
{
    public const RESOURCE_SPECTATOR = '1419:spectator';

    public function getActiveGamesBySummonerId(string $encryptedSummonerId, RegionEnum $region): CurrentGameInfoDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/spectator/v4/active-games/by-summoner/{$encryptedSummonerId}",
            $this->getResource()
        );

        return CurrentGameInfoDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getFeaturedGames(RegionEnum $region): FeaturedGamesDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/spectator/v4/featured-games',
            $this->getResource()
        );

        return FeaturedGamesDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_SPECTATOR;
    }
}
