<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol\Deprecated;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\Deprecated\TeamBansDTO;

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
