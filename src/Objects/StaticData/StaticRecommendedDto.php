<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticRecommendedDto
 * This object contains champion recommended data.
 */
class StaticRecommendedDto extends ApiObject
{
    public string $map;

    /** @var StaticBlockDto[] */
    public array $blocks;

    public string $champion;

    public string $title;

    public bool $priority;

    public string $mode;

    public string $type;
}
