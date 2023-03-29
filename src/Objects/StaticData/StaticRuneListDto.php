<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticRuneListDto
 * This object contains rune list data.
 *
 * @iterable $data
 */
class StaticRuneListDto extends ApiObjectIterable
{
    /** @var StaticRuneDto[] */
    public array $data;

    public string $version;

    public string $type;
}
