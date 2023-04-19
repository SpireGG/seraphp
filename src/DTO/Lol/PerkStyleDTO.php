<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\PerkStyleSelectionDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class PerkStyleDTO implements DTOInterface
{
    public function __construct(
        private readonly string $description,
        private readonly PerkStyleSelectionDTOCollection $selections,
        private readonly int $style
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSelections(): PerkStyleSelectionDTOCollection
    {
        return $this->selections;
    }

    public function getStyle(): int
    {
        return $this->style;
    }
}
