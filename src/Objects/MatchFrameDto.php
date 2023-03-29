<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MatchFrameDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchTimeline
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchTimeline
 */
class MatchFrameDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     *
     * @var String, MatchParticipantFrameDto[]
     */
    public string $participantFrames;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     *
     * @var MatchEventDto[]
     */
    public array $events;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $timestamp;
}
