<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class LeagueEntryDto.
 *
 * Used in:
 *   league-exp (v4)
 *     - @see SeraPHPhine::getLeagueEntries
 *     - @see https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
 *   league (v4)
 *     - @see SeraPHPhine::getLeagueEntriesForSummoner
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntriesForSummoner
 *     - @see SeraPHPhine::getLeagueEntries
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntries
 */
class LeagueEntryDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public string $leagueId;

    /**
     * Player's summonerId (Encrypted).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries
     */
    public string $summonerId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public string $summonerName;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public string $queueType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public string $tier;

    /**
     * The player's division within a tier.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries
     */
    public string $rank;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public int $leaguePoints;

    /**
     * Winning team on Summoners Rift. First placement in Teamfight Tactics.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries
     */
    public int $wins;

    /**
     * Losing team on Summoners Rift. Second through eighth placement in
     * Teamfight Tactics.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries
     */
    public int $losses;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public bool $hotStreak;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public bool $veteran;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public bool $freshBlood;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public bool $inactive;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueEntries.
     */
    public ?MiniSeriesDto $miniSeries;
}
