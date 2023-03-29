<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TournamentCodeParameters.
 *
 * Used in:
 *   tournament-stub (v4)
 *     - @see SeraPHPhine::createTournamentCode
 *     - @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_createTournamentCode
 *   tournament (v4)
 *     - @see SeraPHPhine::createTournamentCode
 *     - @see https://developer.riotgames.com/apis#tournament-v4/POST_createTournamentCode
 */
class TournamentCodeParameters extends ApiObject
{
    /**
     * Optional list of encrypted summonerIds in order to validate the players
     * eligible to join the lobby. NOTE: We currently do not enforce
     * participants at the team level, but rather the aggregate of teamOne and
     * teamTwo. We may add the ability to enforce at the team level in the
     * future.
     *
     * Available when received from:
     *   - @see SeraPHPhine::createTournamentCode
     *   - @see SeraPHPhine::createTournamentCode
     *
     * @var string[]
     */
    public array $allowedSummonerIds;

    /**
     * Optional string that may contain any data in any format, if specified
     * at all. Used to denote any custom information about the game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::createTournamentCode
     *   - @see SeraPHPhine::createTournamentCode
     */
    public string $metadata;

    /**
     * The team size of the game. Valid values are 1-5.
     *
     * Available when received from:
     *   - @see SeraPHPhine::createTournamentCode
     *   - @see SeraPHPhine::createTournamentCode
     */
    public int $teamSize;

    /**
     * The pick type of the game. (Legal values: BLIND_PICK, DRAFT_MODE,
     * ALL_RANDOM, TOURNAMENT_DRAFT).
     *
     * Available when received from:
     *   - @see SeraPHPhine::createTournamentCode
     *   - @see SeraPHPhine::createTournamentCode
     */
    public string $pickType;

    /**
     * The map type of the game. (Legal values: SUMMONERS_RIFT,
     * TWISTED_TREELINE, HOWLING_ABYSS).
     *
     * Available when received from:
     *   - @see SeraPHPhine::createTournamentCode
     *   - @see SeraPHPhine::createTournamentCode
     */
    public string $mapType;

    /**
     * The spectator type of the game. (Legal values: NONE, LOBBYONLY, ALL).
     *
     * Available when received from:
     *   - @see SeraPHPhine::createTournamentCode
     *   - @see SeraPHPhine::createTournamentCode
     */
    public string $spectatorType;
}
