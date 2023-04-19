<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\BanDTO;

final class BanDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return BanDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<BanDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(BanDTO::createFromArray($item));
        }

        return $collection;
    }
}
