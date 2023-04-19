<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ObjectiveDTO implements DTOInterface
{
    public function __construct(
        public bool $first,
        public int $kills
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['first'],
            $data['kills']
        );
    }
}
