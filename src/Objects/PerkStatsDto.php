<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class PerkStatsDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class PerkStatsDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $defense;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $flex;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $offense;
}
