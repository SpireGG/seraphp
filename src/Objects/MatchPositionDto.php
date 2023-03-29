<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MatchPositionDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchTimeline
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchTimeline
 */
class MatchPositionDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $x;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $y;
}
