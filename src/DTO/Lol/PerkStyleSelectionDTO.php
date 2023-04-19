<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class PerkStyleSelectionDTO implements DTOInterface
{
    public function __construct(
        private readonly int $perk,
        private readonly int $var1,
        private readonly int $var2,
        private readonly int $var3
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['perk'],
            $data['var1'],
            $data['var2'],
            $data['var3']
        );
    }

    public function getPerk(): int
    {
        return $this->perk;
    }

    public function getVar1(): int
    {
        return $this->var1;
    }

    public function getVar2(): int
    {
        return $this->var2;
    }

    public function getVar3(): int
    {
        return $this->var3;
    }
}
