<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class UpdateDto.
 *
 * Used in:
 *   lol-status (v4)
 *     - @see SeraPHPhine::getPlatformData
 *     - @see https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
 */
class UpdateDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public int $id;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $author;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public bool $publish;

    /**
     * (Legal values: riotclient, riotstatus, game).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData
     *
     * @var string[]
     */
    public array $publish_locations;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     *
     * @var ContentDto[]
     */
    public array $translations;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $created_at;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlatformData.
     */
    public string $updated_at;
}
