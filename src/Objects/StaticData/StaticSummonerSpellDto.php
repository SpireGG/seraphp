<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticSummonerSpellDto
 * This object contains summoner spell data.
 */
class StaticSummonerSpellDto extends ApiObject
{
    /** @var StaticSpellVarsDto[] */
    public array $vars;

    public StaticImageDto $image;

    public string $costBurn;

    /** @var float[] */
    public array $cooldown;

    /** @var string[] */
    public array $effectBurn;

    public int $id;

    public string $cooldownBurn;

    public string $tooltip;

    public int $maxrank;

    public string $rangeBurn;

    public string $description;

    /**
     *   This field is a List of List of Double.
     *
     * @var int[][]
     */
    public array $effect;

    public string $key;

    public StaticLevelTipDto $leveltip;

    /** @var string[] */
    public array $modes;

    public string $resource;

    public string $name;

    public string $costType;

    /**
     *   This field is either a List of Integer or the String 'self' for spells
     * that target one's own champion.
     *
     * @var int[]
     */
    public array $range;

    /** @var int[] */
    public array $cost;

    public int $summonerLevel;
}
