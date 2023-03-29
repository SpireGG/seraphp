<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StatusDto.
 *
 * Used in:
 *   lol-status (v4)
 *     - @see SeraPHPhine::getPlatformData
 *     - @see https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
 */
class StatusDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public int $id;

    /**
     * (Legal values: scheduled, in_progress, complete).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData
     */
    public string $maintenance_status;

    /**
     * (Legal values: info, warning, critical).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData
     */
    public string $incident_severity;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     *
     * @var ContentDto[]
     */
    public array $titles;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     *
     * @var UpdateDto[]
     */
    public array $updates;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $created_at;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $archive_at;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $updated_at;

    /**
     * (Legal values: windows, macos, android, ios, ps4, xbone, switch).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData
     *
     * @var string[]
     */
    public array $platforms;
}
