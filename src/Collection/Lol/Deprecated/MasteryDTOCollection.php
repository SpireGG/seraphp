<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol\Deprecated;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\Deprecated\MasteryDTO;

final class MasteryDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return MasteryDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<MasteryDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(MasteryDTO::createFromArray($item));
        }

        return $collection;
    }
}
