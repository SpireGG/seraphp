<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MatchParticipantFrameDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchTimeline
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchTimeline
 */
class MatchParticipantFrameDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $participantId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $minionsKilled;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $teamScore;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $dominionScore;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $totalGold;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $level;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $xp;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $currentGold;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public MatchPositionDto $position;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $jungleMinionsKilled;
}
