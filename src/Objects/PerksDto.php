<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class PerksDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class PerksDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public PerkStatsDto $statPerks;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     *
     * @var PerkStyleDto[]
     */
    public array $styles;
}
