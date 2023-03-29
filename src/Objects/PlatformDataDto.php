<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class PlatformDataDto.
 *
 * Used in:
 *   lol-status (v4)
 *     - @see SeraPHPhine::getPlatformData
 *     - @see https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
 */
class PlatformDataDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $id;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $name;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     *
     * @var string[]
     */
    public array $locales;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     *
     * @var StatusDto[]
     */
    public array $maintenances;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     *
     * @var StatusDto[]
     */
    public array $incidents;
}
