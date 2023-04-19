<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MetadataDTO implements DTOInterface
{
    public function __construct(
        private readonly string $dataVersion,
        private readonly string $matchId,
        private readonly array $participants,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['dataVersion'],
            $data['matchId'],
            $data['participants'],
        );
    }

    public function getDataVersion(): string
    {
        return $this->dataVersion;
    }

    public function getMatchId(): string
    {
        return $this->matchId;
    }

    public function getParticipants(): array
    {
        return $this->participants;
    }
}
