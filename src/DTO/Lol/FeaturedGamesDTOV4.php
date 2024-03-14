<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\FeaturedGameInfoDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class FeaturedGamesDTOV4 implements DTOInterface
{
    /** @var FeaturedGameInfoDTOCollection<FeaturedGameInfoDTO> */
    private FeaturedGameInfoDTOCollection $gameList;

    private int $clientRefreshInterval;

    /**
     * @param FeaturedGameInfoDTOCollection<FeaturedGameInfoDTO> $gameList
     */
    public function __construct(
        FeaturedGameInfoDTOCollection $gameList,
        int $clientRefreshInterval
    ) {
        $this->gameList = $gameList;
        $this->clientRefreshInterval = $clientRefreshInterval;
    }

    /**
     * @return FeaturedGameInfoDTOCollection<FeaturedGameInfoDTO>
     */
    public function getGameList(): FeaturedGameInfoDTOCollection
    {
        return $this->gameList;
    }

    public function getClientRefreshInterval(): int
    {
        return $this->clientRefreshInterval;
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            FeaturedGameInfoDTOCollection::createFromArray($data['gameList']),
            $data['clientRefreshInterval'],
        );
    }
}
