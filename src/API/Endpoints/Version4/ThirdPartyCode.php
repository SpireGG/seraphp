<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\Enum\RegionEnum;

final class ThirdPartyCode extends AbstractApi
{
    public const RESOURCE_THIRD_PARTY_CODE = '1426:third-party-code';

    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): string
    {
        $response = $this->riotConnection
            ->get(
                $region->getValue(),
                "lol/platform/v4/third-party-code/by-summoner/{$encryptedSummonerId}",
                $this->getResource()
            );

        return $response->getBodyContentsDecodedAsString();
    }

    protected function getResource(): string
    {
        return self::RESOURCE_THIRD_PARTY_CODE;
    }
}
