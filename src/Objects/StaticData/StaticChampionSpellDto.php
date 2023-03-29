<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticChampionSpellDto
 * This object contains champion spell data.
 */
class StaticChampionSpellDto extends ApiObject
{
    public string $cooldownBurn;

    public string $resource;

    public StaticLevelTipDto $leveltip;

    /** @var StaticSpellVarsDto[] */
    public array $vars;

    public string $costType;

    public StaticImageDto $image;

    /**
     *   This field is a List of List of Double.
     *
     * @var int[][]
     */
    public array $effect;

    public string $tooltip;

    public int $maxrank;

    public string $costBurn;

    public string $rangeBurn;

    /**
     *   This field is either a List of Integer or the String 'self' for spells
     * that target one's own champion.
     *
     * @var int[]
     */
    public array $range;

    /** @var float[] */
    public array $cooldown;

    /** @var int[] */
    public array $cost;

    public string $id;

    public string $description;

    /** @var string[] */
    public array $effectBurn;

    public string $name;
}
