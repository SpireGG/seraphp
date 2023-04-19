<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol\Deprecated;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\Deprecated\ParticipantIdentityDTO;

final class ParticipantIdentityDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return ParticipantIdentityDTO::class;
    }

    /**
     * @param array<array<string, array|string|int>> $data
     *
     * @return self<ParticipantIdentityDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(ParticipantIdentityDTO::createFromArray($item));
        }

        return $collection;
    }
}
