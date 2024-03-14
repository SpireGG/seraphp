<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\Lol\CurrentGameInfoDTOV4;
use SeraPHP\DTO\Lol\FeaturedGamesDTOV4;
use SeraPHP\Enum\RegionEnum;

final class Spectator extends AbstractApi
{
    public const RESOURCE_SPECTATOR = '1419:spectator';

    public function getActiveGamesBySummonerId(string $encryptedSummonerId, RegionEnum $region): CurrentGameInfoDTOV4
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/spectator/v4/active-games/by-summoner/{$encryptedSummonerId}",
            $this->getResource()
        );

        return CurrentGameInfoDTOV4::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getFeaturedGames(RegionEnum $region): FeaturedGamesDTOV4
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/spectator/v4/featured-games',
            $this->getResource()
        );

        return FeaturedGamesDTOV4::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_SPECTATOR;
    }
}
