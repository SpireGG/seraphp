<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticSpellVarsDto
 * This object contains spell vars data.
 */
class StaticSpellVarsDto extends ApiObject
{
    public string $ranksWith;

    public string $dyn;

    public string $link;

    /** @var float[] */
    public array $coeff;

    public string $key;
}
