<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class LeagueListDto.
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
class LeagueListDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public string $leagueId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     *
     * @var LeagueItemDto[]
     */
    public array $entries;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public string $tier;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public string $name;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLeagueById
     *   - @see SeraPHPhine::getGrandmasterLeague
     *   - @see SeraPHPhine::getChallengerLeague
     *   - @see SeraPHPhine::getMasterLeague.
     */
    public string $queue;
}
