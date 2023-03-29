<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MetadataDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class MetadataDto extends ApiObject
{
    /**
     * Match data version.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $data_version;

    /**
     * Match id.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $match_id;

    /**
     * A list of participant PUUIDs.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     *
     * @var string[]
     */
    public array $participants;
}
