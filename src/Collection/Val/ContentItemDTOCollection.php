<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Val;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Val\ContentItemDTO;

final class ContentItemDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ContentItemDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return self<ContentItemDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ContentItemDTO::createFromArray($item));
        }

        return $collection;
    }
}
