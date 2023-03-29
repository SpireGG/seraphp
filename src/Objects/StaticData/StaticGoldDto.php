<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticGoldDto
 * This object contains item gold data.
 */
class StaticGoldDto extends ApiObject
{
    public int $sell;

    public int $total;

    public int $base;

    public bool $purchasable;
}
