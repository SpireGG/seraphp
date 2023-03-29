<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TournamentCodeDto.
 *
 * Used in:
 *   tournament (v4)
 *     - @see SeraPHPhine::getTournamentCode
 *     - @see https://developer.riotgames.com/apis#tournament-v4/GET_getTournamentCode
 */
class TournamentCodeDto extends ApiObject
{
    /**
     * The tournament code.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $code;

    /**
     * The spectator mode for the tournament code game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $spectators;

    /**
     * The lobby name for the tournament code game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $lobbyName;

    /**
     * The metadata for tournament code.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $metaData;

    /**
     * The password for the tournament code game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $password;

    /**
     * The team size for the tournament code game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public int $teamSize;

    /**
     * The provider's ID.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public int $providerId;

    /**
     * The pick mode for tournament code game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $pickType;

    /**
     * The tournament's ID.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public int $tournamentId;

    /**
     * The tournament code's ID.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public int $id;

    /**
     * The tournament code's region. (Legal values: BR, EUNE, EUW, JP, LAN,
     * LAS, NA, OCE, PBE, RU, TR).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $region;

    /**
     * The game map for the tournament code game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     */
    public string $map;

    /**
     * The summonerIds of the participants (Encrypted).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getTournamentCode
     *
     * @var string[]
     */
    public array $participants;
}
