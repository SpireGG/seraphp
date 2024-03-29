<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\UpdateDTO;

final class UpdateDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return UpdateDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return self<UpdateDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(UpdateDTO::createFromArray($item));
        }

        return $collection;
    }
}
