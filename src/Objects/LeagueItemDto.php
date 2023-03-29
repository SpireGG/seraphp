<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class LeagueItemDto.
 *
 * Used in:
 *   league (v4)
 *     - @see SeraPHPhine::getLeagueById
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
 *     - @see SeraPHPhine::getGrandmasterLeague
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
 *     - @see SeraPHPhine::getChallengerLeague
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
 *     - @see SeraPHPhine::getMasterLeague
 *     - @see https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
 */
class LeagueItemDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public bool $freshBlood;

    /**
     * Winning team on Summoners Rift.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     */
    public int $wins;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public string $summonerName;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public ?MiniSeriesDto $miniSeries;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public bool $inactive;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public bool $veteran;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public bool $hotStreak;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public string $rank;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public int $leaguePoints;

    /**
     * Losing team on Summoners Rift.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     */
    public int $losses;

    /**
     * Player's encrypted summonerId.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague
     */
    public string $summonerId;
}
