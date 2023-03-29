<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticMapDetailsDto
 * This object contains map details data.
 */
class StaticMapDetailsDto extends ApiObject
{
    public int $MapId;

    public string $MapName;

    public StaticImageDto $image;

    /** @var int[] */
    public array $unpurchasableItemList;
}
