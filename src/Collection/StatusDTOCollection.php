<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\StatusDTO;

final class StatusDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return StatusDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return self<StatusDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(StatusDTO::createFromArray($item));
        }

        return $collection;
    }
}
