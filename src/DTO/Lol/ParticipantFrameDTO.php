<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ParticipantFrameDTO implements DTOInterface
{
    public function __construct(
        public readonly ChampionStatsDTO $championStats,
        public readonly int $currentGold,
        public readonly DamageStatsDTO $damageStats,
        public readonly int $goldPerSecond,
        public readonly int $jungleMinionsKilled,
        public readonly int $level,
        public readonly int $minionsKilled,
        public readonly int $participantId,
        public readonly PositionDTO $position,
        public readonly int $timeEnemySpentControlled,
        public readonly int $totalGold,
        public readonly int $xp,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            ChampionStatsDTO::createFromArray($data['championStats']),
            $data['currentGold'],
            DamageStatsDTO::createFromArray($data['damageStats']),
            $data['goldPerSecond'],
            $data['jungleMinionsKilled'],
            $data['level'],
            $data['minionsKilled'],
            $data['participantId'],
            PositionDTO::createFromArray($data['position']),
            $data['timeEnemySpentControlled'],
            $data['totalGold'],
            $data['xp'],
        );
    }
}
