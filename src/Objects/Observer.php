<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class Observer.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getFeaturedGames
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *     - @see SeraPHPhine::getCurrentGameInfoBySummoner
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 */
class Observer extends ApiObject
{
    /**
     * Key used to decrypt the spectator grid game data for playback.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $encryptionKey;
}
