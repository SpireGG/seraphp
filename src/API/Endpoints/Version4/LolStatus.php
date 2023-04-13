<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\PlatformDataDTO;
use SeraPHP\Enum\RegionEnum;

final class LolStatus extends AbstractApi
{
    public const RESOURCE_STATUS = '1514:lol-status';

    public function getPlatformData(RegionEnum $region): PlatformDataDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/status/v4/platform-data',
            $this->getResource()
        );

        return PlatformDataDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_STATUS;
    }
}
