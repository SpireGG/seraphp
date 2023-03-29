<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class ChampionInfo.
 *
 * Used in:
 *   champion (v3)
 *     - @see SeraPHPhine::getChampionInfo
 *     - @see https://developer.riotgames.com/apis#champion-v3/GET_getChampionInfo
 */
class ChampionInfo extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getChampionInfo.
     */
    public int $maxNewPlayerLevel;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getChampionInfo.
     *
     * @var int[]
     */
    public array $freeChampionIdsForNewPlayers;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getChampionInfo.
     *
     * @var int[]
     */
    public array $freeChampionIds;
}
