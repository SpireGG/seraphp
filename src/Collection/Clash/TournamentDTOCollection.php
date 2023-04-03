<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Clash;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Clash\TournamentDTO;

final class TournamentDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return TournamentDTO::class;
    }

    /**
     * @param array<array<string, array|int|string>> $data
     *
     * @return self<TournamentDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(TournamentDTO::createFromArray($item));
        }

        return $collection;
    }
}
