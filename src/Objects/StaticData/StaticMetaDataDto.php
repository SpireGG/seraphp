<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticMetaDataDto
 * This object contains meta data.
 */
class StaticMetaDataDto extends ApiObject
{
    public string $tier;

    public string $type;

    public bool $isrune;
}
