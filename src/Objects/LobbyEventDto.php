<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class LobbyEventDto.
 *
 * Used in:
 *   tournament-stub (v4)
 *     - @see SeraPHPhine::getLobbyEventsByCode
 *     - @see https://developer.riotgames.com/apis#tournament-stub-v4/GET_getLobbyEventsByCode
 *   tournament (v4)
 *     - @see SeraPHPhine::getLobbyEventsByCode
 *     - @see https://developer.riotgames.com/apis#tournament-v4/GET_getLobbyEventsByCode
 */
class LobbyEventDto extends ApiObject
{
    /**
     * The summonerId that triggered the event (Encrypted).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLobbyEventsByCode
     *   - @see SeraPHPhine::getLobbyEventsByCode
     */
    public string $summonerId;

    /**
     * The type of event that was triggered.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLobbyEventsByCode
     *   - @see SeraPHPhine::getLobbyEventsByCode
     */
    public string $eventType;

    /**
     * Timestamp from the event.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getLobbyEventsByCode
     *   - @see SeraPHPhine::getLobbyEventsByCode
     */
    public string $timestamp;
}
