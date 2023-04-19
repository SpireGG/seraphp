<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\PerkStyleSelectionDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class PerkStyleDTO implements DTOInterface
{
    public function __construct(
        public string $description,
        public PerkStyleSelectionDTOCollection $selections,
        public int $style
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['description'],
            PerkStyleSelectionDTOCollection::createFromArray($data['selections']),
            $data['style']
        );
    }
}
