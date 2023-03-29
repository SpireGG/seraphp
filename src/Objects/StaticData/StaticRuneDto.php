<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticRuneDto
 * This object contains rune data.
 */
class StaticRuneDto extends ApiObject
{
    public StaticRuneStatsDto $stats;

    public string $name;

    /** @var string[] */
    public array $tags;

    public StaticImageDto $image;

    public StaticMetaDataDto $rune;

    public int $id;

    public string $description;

    public string $colloq;

    public string $plaintext;
}
