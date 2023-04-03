<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\ChampionMasteryDTO;

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
