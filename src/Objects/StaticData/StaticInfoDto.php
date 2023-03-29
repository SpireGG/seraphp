<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticInfoDto
 * This object contains champion information.
 */
class StaticInfoDto extends ApiObject
{
    public int $difficulty;

    public int $attack;

    public int $defense;

    public int $magic;
}
