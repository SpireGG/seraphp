<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticSkinDto
 * This object contains champion skin data.
 */
class StaticSkinDto extends ApiObject
{
    public int $num;

    public string $name;

    public int $id;
}
