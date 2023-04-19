<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class PerkStyleSelectionDTO implements DTOInterface
{
    public function __construct(
        public int $perk,
        public int $var1,
        public int $var2,
        public int $var3
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
}
