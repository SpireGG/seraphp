<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class DamageStatsDTO implements DTOInterface
{
    public function __construct(
        public readonly int $magicDamageDone,
        public readonly int $magicDamageDoneToChampions,
        public readonly int $magicDamageTaken,
        public readonly int $physicalDamageDone,
        public readonly int $physicalDamageDoneToChampions,
        public readonly int $physicalDamageTaken,
        public readonly int $totalDamageDone,
        public readonly int $totalDamageDoneToChampions,
        public readonly int $totalDamageTaken,
        public readonly int $trueDamageDone,
        public readonly int $trueDamageDoneToChampions,
        public readonly int $trueDamageTaken,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['magicDamageDone'],
            $data['magicDamageDoneToChampions'],
            $data['magicDamageTaken'],
            $data['physicalDamageDone'],
            $data['physicalDamageDoneToChampions'],
            $data['physicalDamageTaken'],
            $data['totalDamageDone'],
            $data['totalDamageDoneToChampions'],
            $data['totalDamageTaken'],
            $data['trueDamageDone'],
            $data['trueDamageDoneToChampions'],
            $data['trueDamageTaken'],
        );
    }
}
