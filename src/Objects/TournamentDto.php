<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TournamentDto.
 *
 * Used in:
 *   clash (v1)
 *     - @see SeraPHPhine::getTournamentByTeam
 *     - @see https://developer.riotgames.com/apis#clash-v1/GET_getTournamentByTeam
 *     - @see SeraPHPhine::getTournaments
 *     - @see https://developer.riotgames.com/apis#clash-v1/GET_getTournaments
 *     - @see SeraPHPhine::getTournamentById
 *     - @see https://developer.riotgames.com/apis#clash-v1/GET_getTournamentById
 */
class TournamentDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById.
     */
    public int $id;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById.
     */
    public int $themeId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById.
     */
    public string $nameKey;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById.
     */
    public string $nameKeySecondary;

    /**
     * Tournament phase.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById
     *
     * @var TournamentPhaseDto[]
     */
    public array $schedule;
}
