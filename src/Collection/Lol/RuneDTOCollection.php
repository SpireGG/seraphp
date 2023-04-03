<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\RuneDTO;

final class RuneDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return RuneDTO::class;
    }

    /**
     * @param array<array<string, array|string|int>> $data
     *
     * @return self<RuneDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(RuneDTO::createFromArray($item));
        }

        return $collection;
    }
}
