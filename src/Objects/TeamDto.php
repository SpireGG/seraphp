<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TeamDto.
 *
 * Used in:
 *   clash (v1)
 *     - @see SeraPHPhine::getTeamById
 *     - @see https://developer.riotgames.com/apis#clash-v1/GET_getTeamById
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class TeamDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById.
     */
    public string $id;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById.
     */
    public int $tournamentId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById.
     */
    public string $name;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById.
     */
    public int $iconId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById.
     */
    public int $tier;

    /**
     * Summoner ID of the team captain.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById
     */
    public string $captain;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById.
     */
    public string $abbreviation;

    /**
     * Team members.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTeamById
     *
     * @var PlayerDto[]
     */
    public array $players;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     *
     * @var BanDto[]
     */
    public array $bans;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectivesDto $objectives;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $teamId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $win;
}
