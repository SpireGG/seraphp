<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\ServiceDTO;

final class ServiceDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ServiceDTO::class;
    }

    /**
     * @param array<array<string, array|string>> $data
     *
     * @return ServiceDTOCollection<ServiceDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ServiceDTO::createFromArray($item));
        }

        return $collection;
    }
}
