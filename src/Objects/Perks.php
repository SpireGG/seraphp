<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class Perks.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getCurrentGameInfoBySummoner
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 *
 * @iterable $perkIds
 */
class Perks extends ApiObjectIterable
{
    /**
     * IDs of the perks/runes assigned.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     *
     * @var int[]
     */
    public $perkIds;

    /**
     * Primary runes path.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     *
     * @var int
     */
    public $perkStyle;

    /**
     * Secondary runes path.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     *
     * @var int
     */
    public $perkSubStyle;
}
