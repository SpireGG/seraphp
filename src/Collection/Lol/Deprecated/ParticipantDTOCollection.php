<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol\Deprecated;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\Deprecated\ParticipantDTO;

final class ParticipantDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ParticipantDTO::class;
    }

    /**
     * @param array<array<string, int|string|bool|array>> $data
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
