<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version5;

use SeraPHP\API\AbstractApi;
use SeraPHP\DTO\LobbyEventDTOWrapperDTO;
use SeraPHP\Enum\GeoRegionEnum;
use SeraPHP\Enum\MapTypeEnum;
use SeraPHP\Enum\PickTypeEnum;
use SeraPHP\Enum\SpectatorTypeEnum;
use SeraPHP\Enum\TournamentRegionEnum;
use Webmozart\Assert\Assert;

//@TODO implement v5
final class TournamentStub extends AbstractApi
{
    public const RESOURCE_TOURNAMENT_STUB = '1435:tournament-stub';

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
            "lol/tournament-stub/v4/codes?count={$count}&tournamentId={$tournamentId}",
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

    public function getLobbyEventsByTournamentCode(string $tournamentCode): LobbyEventDTOWrapperDTO
    {
        $response = $this->riotConnection->get(
            GeoRegionEnum::AMERICAS()->getValue(),
            "lol/tournament-stub/v4/lobby-events/by-code/{$tournamentCode}",
            $this->getResource()
        );

        return LobbyEventDTOWrapperDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function createProvider(TournamentRegionEnum $region, string $url): int
    {
        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            'lol/tournament-stub/v4/providers',
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
            'lol/tournament-stub/v4/tournaments',
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
        return self::RESOURCE_TOURNAMENT_STUB;
    }
}
