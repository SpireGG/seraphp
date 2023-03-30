<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\CurrentGameInfoDTO;
use SeraPHPhine\DTO\FeaturedGamesDTO;
use SeraPHPhine\Enum\RegionEnum;

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
