<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticLevelTipDto
 * This object contains champion level tip data.
 */
class StaticLevelTipDto extends ApiObject
{
    /** @var string[] */
    public array $effect;

    /** @var string[] */
    public array $label;
}
