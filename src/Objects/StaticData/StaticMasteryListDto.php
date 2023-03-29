<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticMasteryListDto
 * This object contains mastery list data.
 *
 * @iterable $data
 */
class StaticMasteryListDto extends ApiObjectIterable
{
    /** @var StaticMasteryDto[] */
    public array $data;

    public string $version;

    public StaticMasteryTreeDto $tree;

    public string $type;
}
