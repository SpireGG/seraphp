<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version3;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\ChampionInfoDTO;
use SeraPHP\Enum\RegionEnum;

final class Champion extends AbstractApi
{
    public const RESOURCE_CHAMPION = '1237:champion';

    public function getChampionRotations(RegionEnum $region): ChampionInfoDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/platform/v3/champion-rotations',
            $this->getResource()
        );

        return ChampionInfoDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_CHAMPION;
    }
}
