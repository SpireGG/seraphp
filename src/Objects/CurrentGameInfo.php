<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class CurrentGameInfo.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getCurrentGameInfoBySummoner
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 *
 * @iterable $participants
 */
class CurrentGameInfo extends ApiObjectIterable
{
    /**
     * The ID of the game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $gameId;

    /**
     * The game type.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $gameType;

    /**
     * The game start time represented in epoch milliseconds.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $gameStartTime;

    /**
     * The ID of the map.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $mapId;

    /**
     * The amount of time in seconds that has passed since the game started.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $gameLength;

    /**
     * The ID of the platform on which the game is being played.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $platformId;

    /**
     * The game mode.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $gameMode;

    /**
     * Banned champion information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     *
     * @var BannedChampion[]
     */
    public array $bannedChampions;

    /**
     * The queue type (queue types are documented on the Game Constants page).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $gameQueueConfigId;

    /**
     * The observer information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public Observer $observers;

    /**
     * The participant information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     *
     * @var CurrentGameParticipant[]
     */
    public array $participants;
}
