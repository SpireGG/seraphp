<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch.
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch.
 */
class BanDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $championId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $pickTurn;
}
