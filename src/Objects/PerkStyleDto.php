<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class PerkStyleDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class PerkStyleDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $description;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     *
     * @var PerkStyleSelectionDto[]
     */
    public array $selections;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $style;
}
