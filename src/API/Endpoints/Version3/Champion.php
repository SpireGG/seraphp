<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version3;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\ChampionInfoDTO;
use SeraPHPhine\Enum\RegionEnum;

final class Champion extends AbstractApi
{
    public function getChampionRotations(RegionEnum $region): ChampionInfoDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/platform/v3/champion-rotations',
        );

        return ChampionInfoDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
