<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\MatchFrameDTO;

final class MatchFrameDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return MatchFrameDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<MatchFrameDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(MatchFrameDTO::createFromArray($item));
        }

        return $collection;
    }
}
