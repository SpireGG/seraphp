<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class ContentDto.
 *
 * Used in:
 *   lol-status (v4)
 *     - @see SeraPHPhine::getPlatformData
 *     - @see https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
 */
class ContentDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $locale;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $content;
}
