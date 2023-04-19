<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ChampionStatsDTO implements DTOInterface
{
    public function __construct(
        public int $abilityHaste,
        public int $abilityPower,
        public int $armor,
        public int $armorPen,
        public int $armorPenPercent,
        public int $attackDamage,
        public int $attackSpeed,
        public int $bonusArmorPenPercent,
        public int $bonusMagicPenPercent,
        public int $ccReduction,
        public int $cooldownReduction,
        public int $health,
        public int $healthMax,
        public int $healthRegen,
        public int $lifesteal,
        public int $magicPen,
        public int $magicPenPercent,
        public int $magicResist,
        public int $movementSpeed,
        public int $omnivamp,
        public int $physicalVamp,
        public int $power,
        public int $powerMax,
        public int $powerRegen,
        public int $spellVamp,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['abilityHaste'],
            $data['abilityPower'],
            $data['armor'],
            $data['armorPen'],
            $data['armorPenPercent'],
            $data['attackDamage'],
            $data['attackSpeed'],
            $data['bonusArmorPenPercent'],
            $data['bonusMagicPenPercent'],
            $data['ccReduction'],
            $data['cooldownReduction'],
            $data['health'],
            $data['healthMax'],
            $data['healthRegen'],
            $data['lifesteal'],
            $data['magicPen'],
            $data['magicPenPercent'],
            $data['magicResist'],
            $data['movementSpeed'],
            $data['omnivamp'],
            $data['physicalVamp'],
            $data['power'],
            $data['powerMax'],
            $data['powerRegen'],
            $data['spellVamp'],
        );
    }
}
