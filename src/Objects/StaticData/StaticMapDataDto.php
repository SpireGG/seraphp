<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticMapDataDto
 * This object contains map data.
 *
 * @iterable $data
 */
class StaticMapDataDto extends ApiObjectIterable
{
    /** @var StaticMapDetailsDto[] */
    public array $data;

    public string $version;

    public string $type;
}
