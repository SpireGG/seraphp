<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticChampionListDto
 * This object contains champion list data.
 *
 * @iterable $data
 */
class StaticChampionListDto extends ApiObjectIterable
{
    /** @var StaticChampionDto[] */
    public array $data;

    public string $version;

    public string $type;

    public string $format;
}
