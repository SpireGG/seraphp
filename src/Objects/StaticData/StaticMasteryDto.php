<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticMasteryDto
 * This object contains mastery data.
 */
class StaticMasteryDto extends ApiObject
{
    public string $prereq;

    /**
     *   (Legal values: Cunning, Ferocity, Resolve, Defense, Offense, Utility).
     */
    public string $masteryTree;

    public string $name;

    public int $ranks;

    public StaticImageDto $image;

    public int $id;

    /** @var string[] */
    public array $description;
}
