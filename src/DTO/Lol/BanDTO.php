<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class BanDTO implements DTOInterface
{
    public function __construct(
        public int $championId,
        public int $pickTurn
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['championId'],
            $data['pickTurn']
        );
    }
}
