<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\MatchFrameEventDTO;

final class MatchFrameEventDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return MatchFrameEventDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<MatchFrameEventDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(MatchFrameEventDTO::createFromArray($item));
        }

        return $collection;
    }
}
