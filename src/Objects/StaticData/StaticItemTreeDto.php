<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticItemTreeDto
 * This object contains item tree data.
 */
class StaticItemTreeDto extends ApiObject
{
    public string $header;

    /** @var string[] */
    public array $tags;
}
