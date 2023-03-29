<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticProfileIconDataDto
 * This object contains profile icon data.
 *
 * @iterable $data
 */
class StaticProfileIconDataDto extends ApiObjectIterable
{
    /** @var StaticProfileIconDetailsDto[] */
    public array $data;

    public string $version;

    public string $type;
}
