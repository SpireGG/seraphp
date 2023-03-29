<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticMasteryTreeListDto
 * This object contains mastery tree list data.
 *
 * @iterable $masteryTreeItems
 */
class StaticMasteryTreeListDto extends ApiObjectIterable
{
    /** @var StaticMasteryTreeItemDto[] */
    public array $masteryTreeItems;
}
