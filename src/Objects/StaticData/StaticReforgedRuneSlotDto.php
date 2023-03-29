<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticReforgedRuneSlotDto
 * This object contains reforged rune slot data.
 *
 * @iterable $runes
 */
class StaticReforgedRuneSlotDto extends ApiObjectIterable
{
    /** @var StaticReforgedRuneDto[] */
    public array $runes;
}
