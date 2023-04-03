<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\CurrentGameInfoDTO;
use SeraPHP\DTO\FeaturedGamesDTO;
use SeraPHP\Enum\RegionEnum;

final class Spectator extends AbstractApi
{
    public function getActiveGamesBySummonerId(string $encryptedSummonerId, RegionEnum $region): CurrentGameInfoDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/spectator/v4/active-games/by-summoner/%s', $encryptedSummonerId),
        );

        return CurrentGameInfoDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getFeaturedGames(RegionEnum $region): FeaturedGamesDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/spectator/v4/featured-games',
        );

        return FeaturedGamesDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
