<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticImageDto
 * This object contains image data.
 */
class StaticImageDto extends ApiObject
{
    public string $full;

    public string $group;

    public string $sprite;

    public int $h;

    public int $w;

    public int $y;

    public int $x;
}
