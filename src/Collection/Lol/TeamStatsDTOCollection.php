<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\TeamStatsDTO;

final class TeamStatsDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return TeamStatsDTO::class;
    }

    /**
     * @param array<array<string, mixed>> $data
     *
     * @return self<TeamStatsDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(TeamStatsDTO::createFromArray($item));
        }

        return $collection;
    }
}
