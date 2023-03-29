<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class BannedChampion.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getFeaturedGames
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *     - @see SeraPHPhine::getCurrentGameInfoBySummoner
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 *
 * @seeable getStaticChampion($championId)
 */
class BannedChampion extends ApiObjectLinkable
{
    /**
     * The turn during which the champion was banned.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $pickTurn;

    /**
     * The ID of the banned champion.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $championId;

    /**
     * The ID of the team that banned the champion.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $teamId;
}
