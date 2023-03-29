<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class FeaturedGameInfo.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getFeaturedGames
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *
 * @iterable $participants
 */
class FeaturedGameInfo extends ApiObjectIterable
{
    /**
     * The game mode (Legal values: CLASSIC, ODIN, ARAM, TUTORIAL, ONEFORALL,
     * ASCENSION, FIRSTBLOOD, KINGPORO).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public string $gameMode;

    /**
     * The amount of time in seconds that has passed since the game started.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public int $gameLength;

    /**
     * The ID of the map.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public int $mapId;

    /**
     * The game type (Legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public string $gameType;

    /**
     * Banned champion information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var BannedChampion[]
     */
    public array $bannedChampions;

    /**
     * The ID of the game.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public int $gameId;

    /**
     * The observer information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public Observer $observers;

    /**
     * The queue type (queue types are documented on the Game Constants page).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public int $gameQueueConfigId;

    /**
     * The game start time represented in epoch milliseconds.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public int $gameStartTime;

    /**
     * The participant information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var Participant[]
     */
    public array $participants;

    /**
     * The ID of the platform on which the game is being played.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public string $platformId;
}
