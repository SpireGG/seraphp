<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MatchPositionDTO implements DTOInterface
{
    private int $x;

    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['x'],
            $data['y'],
        );
    }
}
