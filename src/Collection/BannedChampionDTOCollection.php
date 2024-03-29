<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\BannedChampionDTO;

final class BannedChampionDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return BannedChampionDTO::class;
    }

    /**
     * @param array<array<string, string|int>> $data
     *
     * @return BannedChampionDTOCollection<BannedChampionDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(BannedChampionDTO::createFromArray($item));
        }

        return $collection;
    }
}
