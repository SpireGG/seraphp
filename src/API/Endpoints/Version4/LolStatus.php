<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\PlatformDataDTO;
use SeraPHPhine\Enum\RegionEnum;

final class LolStatus extends AbstractApi
{
    public function getPlatformData(RegionEnum $region): PlatformDataDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/status/v4/platform-data',
        );

        return PlatformDataDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
