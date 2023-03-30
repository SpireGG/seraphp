<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\Enum\RegionEnum;

final class ThirdPartyCode extends AbstractApi
{

    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): string
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/platform/v4/third-party-code/by-summoner/%s', $encryptedSummonerId),
        );

        return $response->getBodyContentsDecodedAsString();
    }
}
