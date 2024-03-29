<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\FeaturedGameInfoDTO;

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
