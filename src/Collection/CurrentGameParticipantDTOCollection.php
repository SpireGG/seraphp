<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\CurrentGameParticipantDTO;

final class CurrentGameParticipantDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return CurrentGameParticipantDTO::class;
    }

    /**
     * @param array<array<string, int|string|array|bool>> $data
     *
     * @return CurrentGameParticipantDTOCollection<CurrentGameParticipantDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(CurrentGameParticipantDTO::createFromArray($item));
        }

        return $collection;
    }
}
