<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\ParticipantDTO;

final class ParticipantDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ParticipantDTO::class;
    }

    /**
     * @param array<array<string, int|string|bool>> $data
     *
     * @return ParticipantDTOCollection<ParticipantDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ParticipantDTO::createFromArray($item));
        }

        return $collection;
    }
}
