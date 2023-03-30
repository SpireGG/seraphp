<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\FeaturedGameInfoDTO;

final class FeaturedGameInfoDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return FeaturedGameInfoDTO::class;
    }

    /**
     * @param array<array<string, array|string|int>> $data
     *
     * @return FeaturedGameInfoDTOCollection<FeaturedGameInfoDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(FeaturedGameInfoDTO::createFromArray($item));
        }

        return $collection;
    }
}
