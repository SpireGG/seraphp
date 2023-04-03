<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version1;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\Val\ContentDTO;
use SeraPHP\Enum\ValRegionEnum;

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
