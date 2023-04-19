<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\PerkStyleSelectionDTO;

final class PerkStyleSelectionDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return PerkStyleSelectionDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<PerkStyleSelectionDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(PerkStyleSelectionDTO::createFromArray($item));
        }

        return $collection;
    }
}
