<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\LobbyEventDTO;

final class LobbyEventDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return LobbyEventDTO::class;
    }

    /**
     * @param array<array<string, string>> $data
     *
     * @return self<LobbyEventDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(LobbyEventDTO::createFromArray($item));
        }

        return $collection;
    }
}
