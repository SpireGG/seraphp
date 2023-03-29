<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class TournamentCodeUpdateParameters.
 *
 * Used in:
 *   tournament (v4)
 *     - @see SeraPHPhine::updateCode
 *     - @see https://developer.riotgames.com/apis#tournament-v4/PUT_updateCode
 */
class TournamentCodeUpdateParameters extends ApiObject
{
    /**
     * Optional list of encrypted summonerIds in order to validate the players
     * eligible to join the lobby. NOTE: We currently do not enforce
     * participants at the team level, but rather the aggregate of teamOne and
     * teamTwo. We may add the ability to enforce at the team level in the
     * future.
     *
     * Available when received from:
     *   - @see SeraPHPhine::updateCode
     *
     * @var string[]
     */
    public array $allowedSummonerIds;

    /**
     * The pick type (Legal values: BLIND_PICK, DRAFT_MODE, ALL_RANDOM,
     * TOURNAMENT_DRAFT).
     *
     * Available when received from:
     *   - @see SeraPHPhine::updateCode
     */
    public string $pickType;

    /**
     * The map type (Legal values: SUMMONERS_RIFT, TWISTED_TREELINE,
     * HOWLING_ABYSS).
     *
     * Available when received from:
     *   - @see SeraPHPhine::updateCode
     */
    public string $mapType;

    /**
     * The spectator type (Legal values: NONE, LOBBYONLY, ALL).
     *
     * Available when received from:
     *   - @see SeraPHPhine::updateCode
     */
    public string $spectatorType;
}
