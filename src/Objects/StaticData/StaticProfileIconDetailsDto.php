<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticProfileIconDetailsDto
 * This object contains profile icon details data.
 */
class StaticProfileIconDetailsDto extends ApiObject
{
    public StaticImageDto $image;

    public int $id;
}
