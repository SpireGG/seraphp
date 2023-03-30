<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection\Val;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\Val\ActDTO;

final class ActDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ActDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return self<ActDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ActDTO::createFromArray($item));
        }

        return $collection;
    }
}
