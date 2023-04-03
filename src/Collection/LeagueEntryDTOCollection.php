<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\LeagueEntryDTO;

final class LeagueEntryDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return LeagueEntryDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return LeagueEntryDTOCollection<LeagueEntryDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(LeagueEntryDTO::createFromArray($item));
        }

        return $collection;
    }
}
