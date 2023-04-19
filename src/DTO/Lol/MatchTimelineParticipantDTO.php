<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MatchTimelineParticipantDTO implements DTOInterface
{
    public function __construct(
        private readonly int $participantId,
        private readonly string $puuid,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['participantId'],
            $data['puuid'],
        );
    }
}
