<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class ObjectivesDto.
 *
 * Used in:
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 */
class ObjectivesDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectiveDto $baron;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectiveDto $champion;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectiveDto $dragon;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectiveDto $inhibitor;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectiveDto $riftHerald;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public ObjectiveDto $tower;
}
