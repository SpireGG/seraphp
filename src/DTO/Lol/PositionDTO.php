<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class PositionDTO implements DTOInterface
{
    public function __construct(
        public readonly int $x,
        public readonly int $y,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data('x'),
            $data('y'),
        );
    }
}
