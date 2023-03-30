<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\Lol\TeamBansDTO;

final class TeamBansDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return TeamBansDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<TeamBansDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(TeamBansDTO::createFromArray($item));
        }

        return $collection;
    }
}
