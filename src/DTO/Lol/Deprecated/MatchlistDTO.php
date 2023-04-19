<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol\Deprecated;

use SeraPHP\Collection\Lol\MatchReferenceDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class MatchlistDTO implements DTOInterface
{
    private int $startIndex;

    private int $totalGames;

    private int $endIndex;

    /** @var MatchReferenceDTOCollection<MatchReferenceDTO> */
    private MatchReferenceDTOCollection $matches;

    /**
     * @param MatchReferenceDTOCollection<MatchReferenceDTO> $matches
     */
    public function __construct(
        int $startIndex,
        int $totalGames,
        int $endIndex,
        MatchReferenceDTOCollection $matches
    ) {
        $this->startIndex = $startIndex;
        $this->totalGames = $totalGames;
        $this->endIndex = $endIndex;
        $this->matches = $matches;
    }

    public function getStartIndex(): int
    {
        return $this->startIndex;
    }

    public function getTotalGames(): int
    {
        return $this->totalGames;
    }

    public function getEndIndex(): int
    {
        return $this->endIndex;
    }

    /**
     * @return MatchReferenceDTOCollection<MatchReferenceDTO>
     */
    public function getMatches(): MatchReferenceDTOCollection
    {
        return $this->matches;
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['startIndex'],
            $data['totalGames'],
            $data['endIndex'],
            MatchReferenceDTOCollection::createFromArray($data['matches']),
        );
    }
}
