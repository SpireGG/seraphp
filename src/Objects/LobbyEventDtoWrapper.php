<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class LobbyEventDtoWrapper.
 *
 * Used in:
 *   tournament-stub (v4)
 *     - @see SeraPHPhine::getLobbyEventsByCode
 *     - @see https://developer.riotgames.com/apis#tournament-stub-v4/GET_getLobbyEventsByCode
 *   tournament (v4)
 *     - @see SeraPHPhine::getLobbyEventsByCode
 *     - @see https://developer.riotgames.com/apis#tournament-v4/GET_getLobbyEventsByCode
 */
class LobbyEventDtoWrapper extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getLobbyEventsByCode
     *   - @see SeraPHPhine::getLobbyEventsByCode.
     *
     * @var LobbyEventDto[]
     */
    public array $eventList;
}
