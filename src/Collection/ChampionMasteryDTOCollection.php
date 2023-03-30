<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\ChampionMasteryDTO;

/**
 * @codeCoverageIgnore
 */
final class ChampionMasteryDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ChampionMasteryDTO::class;
    }
}
