<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticReforgedRuneList
 * This object contains collection of all reforged runes.
 *
 * @iterable $runes
 */
class StaticReforgedRuneList extends ApiObjectIterable
{
    /** @var StaticReforgedRuneDto[] */
    public array $runes;
}
