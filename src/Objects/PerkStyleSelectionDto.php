<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class PerkStyleSelectionDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class PerkStyleSelectionDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $perk;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $var1;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $var2;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $var3;
}
