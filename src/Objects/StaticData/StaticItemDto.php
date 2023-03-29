<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticItemDto
 * This object contains item data.
 */
class StaticItemDto extends ApiObject
{
    public StaticGoldDto $gold;

    public string $plaintext;

    public bool $hideFromAll;

    public bool $inStore;

    /** @var string[] */
    public array $into;

    public int $id;

    public StaticInventoryDataStatsDto $stats;

    public string $colloq;

    /** @var bool[] */
    public array $maps;

    public int $specialRecipe;

    public StaticImageDto $image;

    public string $description;

    /** @var string[] */
    public array $tags;

    /** @var string[] */
    public array $effect;

    public string $requiredChampion;

    /** @var string[] */
    public array $from;

    public string $group;

    public bool $consumeOnFull;

    public string $name;

    public bool $consumed;

    public int $depth;

    public int $stacks;
}
