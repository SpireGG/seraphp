<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\ParticipantDTO;

final class ParticipantDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ParticipantDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<ParticipantDTO>
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
