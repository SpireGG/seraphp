<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class InfoDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class InfoDto extends ApiObject
{
    /**
     * Unix timestamp for when the game is created (i.e., the loading screen).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public int $gameCreation;

    /**
     * Game length in milliseconds.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public int $gameDuration;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $gameId;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $gameMode;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $gameName;

    /**
     * Unix timestamp for when match actually starts.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public int $gameStartTimestamp;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $gameType;

    /**
     * The first two parts can be used to determine the patch a game was
     * played on.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $gameVersion;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public int $mapId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     *
     * @var ParticipantDto[]
     */
    public array $participants;

    /**
     * Platform where the match was played.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $platformId;

    /**
     * Refer to the Game Constants documentation.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public int $queueId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     *
     * @var TeamDto[]
     */
    public array $teams;

    /**
     * Tournament code used to generate the match.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $tournamentCode;
}
