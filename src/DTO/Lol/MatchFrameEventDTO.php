<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MatchFrameEventDTO implements DTOInterface
{
    public function __construct(
        public readonly int $timestamp,
        public readonly string $type,
        public readonly ?int $realTimestamp,
        public readonly ?int $participantId,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['timestamp'],
            $data['type'],
            $data['realTimestamp'],
            $data['participantId'],
        );
    }
}
