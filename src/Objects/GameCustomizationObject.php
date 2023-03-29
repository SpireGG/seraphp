<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class GameCustomizationObject.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getCurrentGameInfoBySummoner
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 */
class GameCustomizationObject extends ApiObject
{
    /**
     * Category identifier for Game Customization.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $category;

    /**
     * Game Customization content.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $content;
}
