<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class ParticipantIdentityDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 */
class ParticipantIdentityDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public int $participantId;

    /**
     * Player information not included in the response for custom matches.
     * Custom matches are considered private unless a tournament code was used
     * to create the match.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public PlayerDto $player;
}
