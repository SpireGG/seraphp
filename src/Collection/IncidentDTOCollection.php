<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\IncidentDTO;

final class IncidentDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return IncidentDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return IncidentDTOCollection<IncidentDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(IncidentDTO::createFromArray($item));
        }

        return $collection;
    }
}
