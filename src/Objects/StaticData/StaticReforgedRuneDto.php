<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticReforgedRuneDto
 * This object contains reforged rune data.
 */
class StaticReforgedRuneDto extends ApiObject
{
    public string $name;

    public int $id;

    public string $key;

    public string $shortDesc;

    public string $longDesc;

    public string $icon;
}
