<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\PerkStyleDTO;

final class PerkStyleDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return PerkStyleDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<PerkStyleDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(PerkStyleDTO::createFromArray($item));
        }

        return $collection;
    }
}
