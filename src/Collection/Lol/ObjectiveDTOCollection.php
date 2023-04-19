<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\ObjectiveDTO;

final class ObjectiveDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ObjectiveDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<ObjectiveDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ObjectiveDTO::createFromArray($item));
        }

        return $collection;
    }
}
