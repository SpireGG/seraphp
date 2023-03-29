<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MiniSeriesDto.
 *
 * Used in:
 *   league-exp (v4)
 *     - @see SeraPHPhine::getLeagueEntries
 *     - @see https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
 *   league (v4)
 *     - @see SeraPHPhine::getGrandmasterLeague
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
 *     - @see SeraPHPhine::getChallengerLeague
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
 *     - @see SeraPHPhine::getMasterLeague
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
 *     - @see SeraPHPhine::getLeagueEntries
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntries
 *     - @see SeraPHPhine::getLeagueEntriesForSummoner
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntriesForSummoner
 *     - @see SeraPHPhine::getLeagueById
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
 */
class MiniSeriesDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueById.
     */
    public int $losses;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueById.
     */
    public string $progress;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueById.
     */
    public int $target;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     *   - @see SeraPHPhine::getLeagueEntries
     *   - @see SeraPHPhine::getLeagueEntriesForSummoner
     *   - @see SeraPHPhine::getLeagueById.
     */
    public int $wins;
}
