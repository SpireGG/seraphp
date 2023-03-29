<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticPassiveDto
 * This object contains champion passive data.
 */
class StaticPassiveDto extends ApiObject
{
    public StaticImageDto $image;

    public string $name;

    public string $description;
}
