<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\MatchFrameDTOCollection;
use SeraPHP\Collection\Lol\MatchTimelineParticipantDT0Collection;
use SeraPHP\DTO\DTOInterface;

final class MatchTimelineInfoDTO implements DTOInterface
{
    public function __construct(
        private readonly int $frameInterval,
        private readonly MatchFrameDTOCollection $frames,
        private readonly int $gameId,
        private readonly MatchTimelineParticipantDT0Collection $participants,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['frameInterval'],
            MatchFrameDTOCollection::createFromArray($data['frames']),
            $data['gameId'],
            MatchTimelineParticipantDT0Collection::createFromArray($data['participants']),
        );
    }

    public function getFrameInterval(): int
    {
        return $this->frameInterval;
    }

    public function getFrames(): MatchFrameDTOCollection
    {
        return $this->frames;
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function getParticipants(): MatchTimelineParticipantDT0Collection
    {
        return $this->participants;
    }
}
