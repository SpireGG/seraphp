<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticMasteryTreeItemDto
 * This object contains mastery tree item data.
 */
class StaticMasteryTreeItemDto extends ApiObject
{
    public int $masteryId;

    public string $prereq;
}
