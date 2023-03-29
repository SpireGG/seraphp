<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class TeamBansDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 *
 * @seeable getStaticChampion($championId)
 */
class TeamBansDto extends ApiObjectLinkable
{
    /**
     * Banned championId.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $championId;

    /**
     * Turn during which the champion was banned.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $pickTurn;
}
