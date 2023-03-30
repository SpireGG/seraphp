<?php

declare(strict_types=1);

namespace SeraPHPhine\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHPhine\DTO\Lol\MatchReferenceDTO;

final class MatchReferenceDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return MatchReferenceDTO::class;
    }

    /**
     * @param array<array<string, int|string>> $data
     *
     * @return self<MatchReferenceDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(MatchReferenceDTO::createFromArray($item));
        }

        return $collection;
    }
}
