<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class MatchlistDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchlist
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchlist
 *
 * @iterable $matches
 */
class MatchlistDto extends ApiObjectIterable
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $startIndex;

    /**
     * There is a known issue that this field doesn't correctly return the
     * total number of games that match the parameters of the request. Please
     * paginate using beginIndex until you reach the end of a player's
     * matchlist.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist
     */
    public int $totalGames;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     */
    public int $endIndex;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchlist.
     *
     * @var MatchReferenceDto[]
     */
    public array $matches;
}
