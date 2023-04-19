<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\PerkStyleDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class PerksDTO implements DTOInterface
{
    public function __construct(
        private readonly PerkStatsDTO $statPerks,
        private readonly PerkStyleDTOCollection $styles
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            PerkStatsDTO::createFromArray($data['statPerks']),
            PerkStyleDTOCollection::createFromArray($data['styles'])
        );
    }

    public function getStatPerks(): PerkStatsDTO
    {
        return $this->statPerks;
    }

    public function getStyles(): PerkStyleDTOCollection
    {
        return $this->styles;
    }
}
