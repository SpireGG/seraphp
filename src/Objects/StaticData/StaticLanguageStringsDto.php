<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObjectIterable;

/**
 *   Class StaticLanguageStringsDto
 * This object contains language strings data.
 *
 * @iterable $data
 */
class StaticLanguageStringsDto extends ApiObjectIterable
{
    /** @var string[] */
    public array $data;

    public string $version;

    public string $type;
}
