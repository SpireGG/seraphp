<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\PerkStyleDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class PerksDTO implements DTOInterface
{
    public function __construct(
        public PerkStatsDTO $statPerks,
        public PerkStyleDTOCollection $styles
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            PerkStatsDTO::createFromArray($data['statPerks']),
            PerkStyleDTOCollection::createFromArray($data['styles'])
        );
    }
}
