<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TeamStatsDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 */
class TeamStatsDto extends ApiObject
{
    /**
     * Number of towers the team destroyed.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $towerKills;

    /**
     * Number of times the team killed Rift Herald.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $riftHeraldKills;

    /**
     * Flag indicating whether or not the team scored the first blood.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public bool $firstBlood;

    /**
     * Number of inhibitors the team destroyed.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $inhibitorKills;

    /**
     * If match queueId has a draft, contains banned champion data, otherwise
     * empty.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var TeamBansDto[]
     */
    public array $bans;

    /**
     * Flag indicating whether or not the team scored the first Baron kill.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public bool $firstBaron;

    /**
     * Flag indicating whether or not the team scored the first Dragon kill.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public bool $firstDragon;

    /**
     * For Dominion matches, specifies the points the team had at game end.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $dominionVictoryScore;

    /**
     * Number of times the team killed Dragon.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $dragonKills;

    /**
     * Number of times the team killed Baron.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $baronKills;

    /**
     * Flag indicating whether or not the team destroyed the first inhibitor.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public bool $firstInhibitor;

    /**
     * Flag indicating whether or not the team destroyed the first tower.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public bool $firstTower;

    /**
     * Number of times the team killed Vilemaw.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $vilemawKills;

    /**
     * Flag indicating whether or not the team scored the first Rift Herald
     * kill.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public bool $firstRiftHerald;

    /**
     * 100 for blue side. 200 for red side.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $teamId;

    /**
     * String indicating whether or not the team won. There are only two
     * values visibile in public match history. (Legal values: Fail, Win).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $win;
}
