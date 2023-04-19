<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class PerkStatsDTO implements DTOInterface
{
    public function __construct(
        public int $defense,
        public int $flex,
        public int $offense
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
}
