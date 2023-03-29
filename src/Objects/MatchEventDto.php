<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class MatchEventDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchTimeline
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchTimeline
 */
class MatchEventDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $laneType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $skillSlot;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $ascendedType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $creatorId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $afterId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $eventType;

    /**
     * (Legal values: CHAMPION_KILL, WARD_PLACED, WARD_KILL, BUILDING_KILL,
     * ELITE_MONSTER_KILL, ITEM_PURCHASED, ITEM_SOLD, ITEM_DESTROYED,
     * ITEM_UNDO, SKILL_LEVEL_UP, ASCENDED_EVENT, CAPTURE_POINT,
     * PORO_KING_SUMMON).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline
     */
    public string $type;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $levelUpType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $wardType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $participantId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $towerType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $itemId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $beforeId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $pointCaptured;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $monsterType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $monsterSubType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $teamId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public MatchPositionDto $position;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $killerId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $timestamp;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     *
     * @var int[]
     */
    public array $assistingParticipantIds;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public string $buildingType;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchTimeline.
     */
    public int $victimId;
}
