<?php

declare(strict_types=1);

namespace SeraPHP\Collection\Lol;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\Lol\MatchTimelineParticipantDTO;

final class MatchTimelineParticipantDT0Collection extends AbstractCollection
{
    public function getType(): string
    {
        return MatchTimelineParticipantDTO::class;
    }

    /**
     * @param array<array<string, int>> $data
     *
     * @return self<MatchTimelineParticipantDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(MatchTimelineParticipantDTO::createFromArray($item));
        }

        return $collection;
    }
}
