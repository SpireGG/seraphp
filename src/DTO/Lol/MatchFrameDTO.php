<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\MatchFrameEventDTOCollection;
use SeraPHP\Collection\Lol\ParticipantFrameDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class MatchFrameDTO implements DTOInterface
{
    public function __construct(
        private readonly MatchFrameEventDTOCollection $events,
        private readonly ParticipantFrameDTOCollection $participantFrames,
        private readonly int $timestamp,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            MatchFrameEventDTOCollection::createFromArray($data['events']),
            ParticipantFrameDTOCollection::createFromArray($data['participantFrames']),
            $data['timestamp'],
        );
    }

    public function getEvents(): MatchFrameEventDTOCollection
    {
        return $this->events;
    }

    public function getParticipantFrames(): ParticipantFrameDTOCollection
    {
        return $this->participantFrames;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
}
