<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TournamentPhaseDto.
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
class TournamentPhaseDto extends ApiObject
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
    public int $registrationTime;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById.
     */
    public int $startTime;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentByTeam
     *   - @see SeraPHPhine::getTournaments
     *   - @see SeraPHPhine::getTournamentById.
     */
    public bool $cancelled;
}
