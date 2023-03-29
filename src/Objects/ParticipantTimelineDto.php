<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class ParticipantTimelineDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 */
class ParticipantTimelineDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public int $participantId;

    /**
     * Creep score difference versus the calculated lane opponent(s) for a
     * specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $csDiffPerMinDeltas;

    /**
     * Damage taken for a specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $damageTakenPerMinDeltas;

    /**
     * Participant's calculated role. (Legal values: DUO, NONE, SOLO,
     * DUO_CARRY, DUO_SUPPORT).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $role;

    /**
     * Damage taken difference versus the calculated lane opponent(s) for a
     * specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $damageTakenDiffPerMinDeltas;

    /**
     * Experience change for a specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $xpPerMinDeltas;

    /**
     * Experience difference versus the calculated lane opponent(s) for a
     * specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $xpDiffPerMinDeltas;

    /**
     * Participant's calculated lane. MID and BOT are legacy values. (Legal
     * values: MID, MIDDLE, TOP, JUNGLE, BOT, BOTTOM).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $lane;

    /**
     * Creeps for a specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $creepsPerMinDeltas;

    /**
     * Gold for a specified period.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var String, double[]
     */
    public string $goldPerMinDeltas;
}
