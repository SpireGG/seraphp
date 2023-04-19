<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol\Deprecated;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\Deprecated\MatchFrameDTO;

final class MatchFrameDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return MatchFrameDTO::class;
    }

    /**
     * @param array<array<string, array|int>> $data
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
