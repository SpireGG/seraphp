<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticChampionDto
 * This object contains champion data.
 */
class StaticChampionDto extends ApiObject
{
    public StaticInfoDto $info;

    /** @var string[] */
    public array $enemytips;

    public StaticStatsDto $stats;

    public string $name;

    public string $title;

    public StaticImageDto $image;

    /** @var string[] */
    public array $tags;

    public string $partype;

    /** @var StaticSkinDto[] */
    public array $skins;

    public StaticPassiveDto $passive;

    /** @var StaticRecommendedDto[] */
    public array $recommended;

    /** @var string[] */
    public array $allytips;

    public string $key;

    public string $lore;

    public int $id;

    public string $blurb;

    /** @var StaticChampionSpellDto[] */
    public array $spells;
}
