<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class MatchTimelineDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchTimeline
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchTimeline
 *
 * @iterable $frames
 */
class MatchTimelineDto extends ApiObjectIterable
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     *
     * @var MatchFrameDto[]
     */
    public array $frames;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $frameInterval;
}
