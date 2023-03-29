<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class PlayerDto.
 *
 * Used in:
 *   clash (v1)
 *     - @see SeraPHPhine::getTeamById
 *     - @see https://developer.riotgames.com/apis#clash-v1/GET_getTeamById
 *     - @see SeraPHPhine::getPlayersBySummoner
 *     - @see https://developer.riotgames.com/apis#clash-v1/GET_getPlayersBySummoner
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 */
class PlayerDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById
     *   - @see SeraPHPhine::getPlayersBySummoner
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public string $summonerId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getPlayersBySummoner.
     */
    public string $teamId;

    /**
     * (Legal values: UNSELECTED, FILL, TOP, JUNGLE, MIDDLE, BOTTOM, UTILITY).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById
     *   - @see SeraPHPhine::getPlayersBySummoner
     */
    public string $position;

    /**
     * (Legal values: CAPTAIN, MEMBER).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById
     *   - @see SeraPHPhine::getPlayersBySummoner
     */
    public string $role;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public int $profileIcon;

    /**
     * Player's original accountId.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $accountId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public string $matchHistoryUri;

    /**
     * Player's current accountId when the match was played.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $currentAccountId;

    /**
     * Player's current platformId when the match was played.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $currentPlatformId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public string $summonerName;

    /**
     * Player's original platformId.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $platformId;
}
