<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class PerkStatsDTO implements DTOInterface
{
    public function __construct(
        private readonly int $defense,
        private readonly int $flex,
        private readonly int $offense
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['defense'],
            $data['flex'],
            $data['offense']
        );
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function getFlex(): int
    {
        return $this->flex;
    }

    public function getOffense(): int
    {
        return $this->offense;
    }
}
