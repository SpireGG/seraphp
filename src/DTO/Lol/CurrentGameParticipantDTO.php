<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\GameCustomizationObjectDTOCollection;
use SeraPHP\DTO\DTOInterface;
use SeraPHP\DTO\Lol\Deprecated\PerksDTO;

final class CurrentGameParticipantDTO implements DTOInterface
{
    /** @var GameCustomizationObjectDTOCollection<GameCustomizationObjectDTO> */
    private GameCustomizationObjectDTOCollection $gameCustomizationObjects;

    /**
     * @param GameCustomizationObjectDTOCollection<GameCustomizationObjectDTO> $gameCustomizationObjects
     */
    public function __construct(
        private readonly int $championId,
        private readonly PerksDTO $perks,
        private readonly int $profileIconId,
        private readonly bool $bot,
        private readonly int $teamId,
        private readonly string $summonerName,
        private readonly string $summonerId,
        private readonly int $spell1Id,
        private readonly int $spell2Id,
        GameCustomizationObjectDTOCollection $gameCustomizationObjects
    ) {
        $this->gameCustomizationObjects = $gameCustomizationObjects;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function getPerks(): PerksDTO
    {
        return $this->perks;
    }

    public function getProfileIconId(): int
    {
        return $this->profileIconId;
    }

    public function isBot(): bool
    {
        return $this->bot;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getSpell1Id(): int
    {
        return $this->spell1Id;
    }

    public function getSpell2Id(): int
    {
        return $this->spell2Id;
    }

    /**
     * @return GameCustomizationObjectDTOCollection<GameCustomizationObjectDTO>
     */
    public function getGameCustomizationObjects(): GameCustomizationObjectDTOCollection
    {
        return $this->gameCustomizationObjects;
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['championId'],
            PerksDTO::createFromArray($data['perks']),
            $data['profileIconId'],
            $data['bot'],
            $data['teamId'],
            $data['summonerName'],
            $data['summonerId'],
            $data['spell1Id'],
            $data['spell2Id'],
            GameCustomizationObjectDTOCollection::createFromArray($data['gameCustomizationObjects']),
        );
    }
}
