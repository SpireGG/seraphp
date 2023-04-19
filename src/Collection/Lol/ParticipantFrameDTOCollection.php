<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\ParticipantFrameDTO;

final class ParticipantFrameDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ParticipantFrameDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<ParticipantFrameDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ParticipantFrameDTO::createFromArray($item));
        }

        return $collection;
    }
}
