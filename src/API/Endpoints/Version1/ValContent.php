<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version1;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\Val\ContentDTO;
use SeraPHPhine\Enum\ValRegionEnum;

final class ValContent extends AbstractApi
{
    public function get(ValRegionEnum $valRegion, ?string $locale = null): ContentDTO
    {
        if ($locale) {
            $locale = '?locale='.$locale;
        }

        $response = $this->riotConnection->get(
            $valRegion->getValue(),
            sprintf('val/content/v1/contents%s', $locale),
        );

        return ContentDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
