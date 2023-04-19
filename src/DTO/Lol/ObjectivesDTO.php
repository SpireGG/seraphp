<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ObjectivesDTO implements DTOInterface
{
    public function __construct(
        private readonly ObjectiveDTO $baron,
        private readonly ObjectiveDTO $champion,
        private readonly ObjectiveDTO $dragon,
        private readonly ObjectiveDTO $inhibitor,
        private readonly ObjectiveDTO $riftHerald,
        private readonly ObjectiveDTO $tower,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            ObjectiveDTO::createFromArray($data['baron']),
            ObjectiveDTO::createFromArray($data['champion']),
            ObjectiveDTO::createFromArray($data['dragon']),
            ObjectiveDTO::createFromArray($data['inhibitor']),
            ObjectiveDTO::createFromArray($data['riftHerald']),
            ObjectiveDTO::createFromArray($data['tower']),
        );
    }

    public function getBaron(): ObjectiveDTO
    {
        return $this->baron;
    }

    public function getChampion(): ObjectiveDTO
    {
        return $this->champion;
    }

    public function getDragon(): ObjectiveDTO
    {
        return $this->dragon;
    }

    public function getInhibitor(): ObjectiveDTO
    {
        return $this->inhibitor;
    }

    public function getRiftHerald(): ObjectiveDTO
    {
        return $this->riftHerald;
    }

    public function getTower(): ObjectiveDTO
    {
        return $this->tower;
    }
}
