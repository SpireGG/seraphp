<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class FeaturedGames.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getFeaturedGames
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *
 * @iterable $gameList
 */
class FeaturedGames extends ApiObjectIterable
{
    /**
     * The list of featured games.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var FeaturedGameInfo[]
     */
    public array $gameList;

    /**
     * The suggested interval to wait before requesting FeaturedGames again.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     */
    public int $clientRefreshInterval;
}
