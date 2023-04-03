<?php

declare(strict_types=1);

namespace SeraPHP\DTO;

use SeraPHP\Collection\PlayerDTOCollection;

final class LeaderboardDTO implements DTOInterface
{
    /** @var PlayerDTOCollection<PlayerDTO> */
    private PlayerDTOCollection $players;

    /**
     * @param PlayerDTOCollection<PlayerDTO> $players
     */
    public function __construct(PlayerDTOCollection $players)
    {
        $this->players = $players;
    }

    public function getPlayers(): PlayerDTOCollection
    {
        return $this->players;
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            PlayerDTOCollection::createFromArray($data['players']),
        );
    }
}
