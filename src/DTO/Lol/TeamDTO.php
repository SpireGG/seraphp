<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\BanDTOCollection;
use SeraPHP\Collection\Lol\ObjectiveDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class TeamDTO implements DTOInterface
{
    public function __construct(
        private BanDTOCollection $bans,
        private ObjectiveDTOCollection $objectives,
        private int $teamId,
        private bool $win,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            BanDTOCollection::createFromArray($data['bans']),
            ObjectiveDTOCollection::createFromArray($data['objectives']),
            $data['teamId'],
            $data['win']
        );
    }

    public function getBans(): BanDTOCollection
    {
        return $this->bans;
    }

    public function getObjectives(): ObjectiveDTOCollection
    {
        return $this->objectives;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function isWin(): bool
    {
        return $this->win;
    }
}
