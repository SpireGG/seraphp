<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\Lol\Deprecated\MatchDTO;
use SeraPHP\DTO\Lol\Deprecated\MatchlistDTO;
use SeraPHP\DTO\Lol\Deprecated\MatchTimelineDTO;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Filter\MatchlistFilter;

final class Match_ extends AbstractApi
{
    public const RESOURCE_MATCH = '1520:match';

    public function getByMatchId(int $matchId, RegionEnum $region): MatchDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/match/v4/matches/{$matchId}",
            $this->getResource()
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getMatchlistByAccountId(
        string $encryptedAccountId,
        RegionEnum $region,
        ?MatchlistFilter $filter = null
    ): MatchlistDTO {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'lol/match/v4/matchlists/by-account/%s?%s',
                $encryptedAccountId,
                $filter ? $filter->getAsHttpQuery() : ''
            ),
            $this->getResource()
        );

        return MatchlistDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getTimelineByMatchId(int $matchId, RegionEnum $region): MatchTimelineDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/match/v4/timelines/by-match/{$matchId}",
            $this->getResource()
        );

        return MatchTimelineDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    /**
     * @return array<int, int>
     */
    public function getIdsByTournamentCode(string $tournamentCode, RegionEnum $region): array
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/match/v4/matches/by-tournament-code/{$tournamentCode}/ids",
            $this->getResource()
        );

        return $response->getBodyContentsDecodedAsArray();
    }

    public function getByMatchIdAndTournamentCode(int $matchId, string $tournamentCode, RegionEnum $region): MatchDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/match/v4/matches/{$matchId}/by-tournament-code/{$tournamentCode}",
            $this->getResource()
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_MATCH;
    }
}
