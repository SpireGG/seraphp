<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticBlockDto
 * This object contains champion recommended block data.
 */
class StaticBlockDto extends ApiObject
{
    /** @var StaticBlockItemDto[] */
    public array $items;

    public bool $recMath;

    public string $type;
}
