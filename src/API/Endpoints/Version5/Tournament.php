<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version5;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\LobbyEventDTOWrapperDTO;
use SeraPHP\DTO\TournamentCodeDTO;
use SeraPHP\Enum\GeoRegionEnum;
use SeraPHP\Enum\MapTypeEnum;
use SeraPHP\Enum\PickTypeEnum;
use SeraPHP\Enum\SpectatorTypeEnum;
use SeraPHP\Enum\TournamentRegionEnum;
use Webmozart\Assert\Assert;

//@TODO implement v5
final class Tournament extends AbstractApi
{
    public const RESOURCE_TOURNAMENT = '1436:tournament';

    /**
     * @param array<string> $allowedSummonerIds
     *
     * @return array<string>
     */
    public function createCode(
        int $tournamentId,
        int $count,
        array $allowedSummonerIds,
        int $teamSize,
        PickTypeEnum $pickType,
        MapTypeEnum $mapType,
        SpectatorTypeEnum $spectatorType,
        ?string $metadata
    ): array {
        Assert::isList($allowedSummonerIds);
        Assert::allString($allowedSummonerIds);
        Assert::range($teamSize, 1, 5);

        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            "lol/tournament/v4/codes?count={$count}&tournamentId={$tournamentId}",
            $this->getResource(),
            [
                'allowedSummonerIds' => $allowedSummonerIds,
                'metadata' => $metadata,
                'teamSize' => $teamSize,
                'pickType' => $pickType->getValue(),
                'mapType' => $mapType->getValue(),
                'spectatorType' => $spectatorType->getValue(),
            ],
        );

        return $response->getBodyContentsDecodedAsArray();
    }

    /**
     * @param array<string> $allowedSummonerIds
     */
    public function updateCode(
        string $tournamentCode,
        array $allowedSummonerIds,
        PickTypeEnum $pickType,
        MapTypeEnum $mapType,
        SpectatorTypeEnum $spectatorType
    ): bool {
        Assert::isList($allowedSummonerIds);
        Assert::allString($allowedSummonerIds);

        $this->riotConnection->put(
            GeoRegionEnum::AMERICAS()->getValue(),
            "lol/tournament/v4/codes/{$tournamentCode}",
            $this->getResource(),
            [
                'allowedSummonerIds' => $allowedSummonerIds,
                'pickType' => $pickType->getValue(),
                'mapType' => $mapType->getValue(),
                'spectatorType' => $spectatorType->getValue(),
            ],
        );

        return true;
    }

    public function getCodeByTournamentCode(string $tournamentCode): TournamentCodeDTO
    {
        $response = $this->riotConnection->get(
            GeoRegionEnum::AMERICAS()->getValue(),
            "lol/tournament/v4/codes/{$tournamentCode}",
            $this->getResource()
        );

        return TournamentCodeDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getLobbyEventsByTournamentCode(string $tournamentCode): LobbyEventDTOWrapperDTO
    {
        $response = $this->riotConnection->get(
            GeoRegionEnum::AMERICAS()->getValue(),
            "lol/tournament/v4/lobby-events/by-code/{$tournamentCode}",
            $this->getResource()
        );

        return LobbyEventDTOWrapperDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function createProvider(TournamentRegionEnum $region, string $url): int
    {
        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            'lol/tournament/v4/providers',
            $this->getResource(),
            [
                'region' => $region->getValue(),
                'url' => $url,
            ],
        );

        return $response->getBodyContentsDecodedAsInt();
    }

    public function createTournament(int $providerId, string $name): int
    {
        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            'lol/tournament/v4/tournaments',
            $this->getResource(),
            [
                'providerId' => $providerId,
                'name' => $name,
            ],
        );

        return $response->getBodyContentsDecodedAsInt();
    }

    protected function getResource(): string
    {
        return self::RESOURCE_TOURNAMENT;
    }
}
