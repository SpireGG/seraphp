<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\PlayerDTO;

final class PlayerDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return PlayerDTO::class;
    }

    /**
     * @param array<array<string, string|int>> $data
     *
     * @return PlayerDTOCollection<PlayerDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(PlayerDTO::createFromArray($item));
        }

        return $collection;
    }
}
