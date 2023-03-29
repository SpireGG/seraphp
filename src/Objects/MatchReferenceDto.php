<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class MatchReferenceDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchlist
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchlist
 *
 * @seeable getStaticChampion($champion)
 */
class MatchReferenceDto extends ApiObjectLinkable
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $gameId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public string $role;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $season;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public string $platformId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $champion;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $queue;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public string $lane;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $timestamp;
}
