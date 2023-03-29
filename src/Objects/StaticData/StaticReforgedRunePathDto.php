<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticReforgedRunePathDto
 * This object contains reforged rune path data.
 *
 * @iterable $slots
 */
class StaticReforgedRunePathDto extends ApiObjectIterable
{
    /** @var StaticReforgedRuneSlotDto[] */
    public array $slots;

    public string $icon;

    public int $id;

    public string $key;

    public string $name;
}
