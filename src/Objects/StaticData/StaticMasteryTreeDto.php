<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticMasteryTreeDto
 * This object contains mastery tree data.
 */
class StaticMasteryTreeDto extends ApiObject
{
    /** @var StaticMasteryTreeListDto[] */
    public array $Resolve;

    /** @var StaticMasteryTreeListDto[] */
    public array $Defense;

    /** @var StaticMasteryTreeListDto[] */
    public array $Utility;

    /** @var StaticMasteryTreeListDto[] */
    public array $Offense;

    /** @var StaticMasteryTreeListDto[] */
    public array $Ferocity;

    /** @var StaticMasteryTreeListDto[] */
    public array $Cunning;
}
