<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticReforgedRunePathList
 * This object contains collection of reforged rune paths.
 *
 * @iterable $paths
 */
class StaticReforgedRunePathList extends ApiObjectIterable
{
    /** @var StaticReforgedRunePathDto[] */
    public array $paths;
}
