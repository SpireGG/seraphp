<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MatchDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class MatchDto extends ApiObject
{
    /**
     * Match metadata.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public MetadataDto $metadata;

    /**
     * Match info.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public InfoDto $info;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch.
     */
    public int $gameId;

    /**
     * Participant identity information. Participant identity information is
     * purposefully excluded for custom games.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var ParticipantIdentityDto[]
     */
    public array $participantIdentities;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $queueId;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $gameType;

    /**
     * Match duration in seconds.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $gameDuration;

    /**
     * Team information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var TeamStatsDto[]
     */
    public array $teams;

    /**
     * Platform where the match was played.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $platformId;

    /**
     * Designates the timestamp when champion select ended and the loading
     * screen appeared, NOT when the game timer was at 0:00.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $gameCreation;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $seasonId;

    /**
     * The major.minor version typically indicates the patch the match was
     * played on.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $gameVersion;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $mapId;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $gameMode;

    /**
     * Participant information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var ParticipantDto[]
     */
    public array $participants;
}
