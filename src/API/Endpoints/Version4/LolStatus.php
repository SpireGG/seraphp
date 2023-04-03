<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\PlatformDataDTO;
use SeraPHP\Enum\RegionEnum;

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
