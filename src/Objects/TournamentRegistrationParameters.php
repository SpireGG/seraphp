<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TournamentRegistrationParameters.
 *
 * Used in:
 *   tournament-stub (v4)
 *     - @see SeraPHPhine::registerTournament
 *     - @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_registerTournament
 *   tournament (v4)
 *     - @see SeraPHPhine::registerTournament
 *     - @see https://developer.riotgames.com/apis#tournament-v4/POST_registerTournament
 */
class TournamentRegistrationParameters extends ApiObject
{
    /**
     * The provider ID to specify the regional registered provider data to
     * associate this tournament.
     *
     * Available when received from:
     *   - @see SeraPHPhine::registerTournament
     *   - @see SeraPHPhine::registerTournament
     */
    public int $providerId;

    /**
     * The optional name of the tournament.
     *
     * Available when received from:
     *   - @see SeraPHPhine::registerTournament
     *   - @see SeraPHPhine::registerTournament
     */
    public string $name;
}
