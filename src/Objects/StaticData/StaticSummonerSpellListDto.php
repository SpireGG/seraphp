<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticSummonerSpellListDto
 * This object contains summoner spell list data.
 *
 * @iterable $data
 */
class StaticSummonerSpellListDto extends ApiObjectIterable
{
    /** @var StaticSummonerSpellDto[] */
    public array $data;

    public string $version;

    public string $type;
}
