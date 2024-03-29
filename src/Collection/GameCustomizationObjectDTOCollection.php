<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\GameCustomizationObjectDTO;

final class GameCustomizationObjectDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return GameCustomizationObjectDTO::class;
    }

    /**
     * @param array<array<string, array|string>> $data
     *
     * @return GameCustomizationObjectDTOCollection<GameCustomizationObjectDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(GameCustomizationObjectDTO::createFromArray($item));
        }

        return $collection;
    }
}
