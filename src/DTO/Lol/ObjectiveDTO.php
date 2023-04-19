<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ObjectiveDTO implements DTOInterface
{
    public function __construct(
        private readonly bool $first,
        private readonly int $kills
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['first'],
            $data['kills']
        );
    }

    public function isFirst(): bool
    {
        return $this->first;
    }

    public function getKills(): int
    {
        return $this->kills;
    }
}
