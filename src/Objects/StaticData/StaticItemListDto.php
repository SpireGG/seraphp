<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticItemListDto
 * This object contains item list data.
 *
 * @iterable $data
 */
class StaticItemListDto extends ApiObjectIterable
{
    /** @var StaticItemDto[] */
    public array $data;

    public string $version;

    /** @var StaticItemTreeDto[] */
    public array $tree;

    /** @var StaticGroupDto[] */
    public array $groups;

    public string $type;
}
