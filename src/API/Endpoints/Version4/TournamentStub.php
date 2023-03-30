<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\LobbyEventDTOWrapperDTO;
use SeraPHPhine\Enum\GeoRegionEnum;
use SeraPHPhine\Enum\MapTypeEnum;
use SeraPHPhine\Enum\PickTypeEnum;
use SeraPHPhine\Enum\SpectatorTypeEnum;
use SeraPHPhine\Enum\TournamentRegionEnum;
use Webmozart\Assert\Assert;

final class TournamentStub extends AbstractApi
{
    /**
     * @param array<string> $allowedSummonerIds
     *
     * @return array<string>
     *
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
            sprintf('lol/tournament-stub/v4/codes?count=%d&tournamentId=%d', $count, $tournamentId),
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
            sprintf('lol/tournament-stub/v4/lobby-events/by-code/%s', $tournamentCode),
        );

        return LobbyEventDTOWrapperDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function createProvider(TournamentRegionEnum $region, string $url): int
    {
        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            'lol/tournament-stub/v4/providers',
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
            [
                'providerId' => $providerId,
                'name' => $name,
            ],
        );

        return $response->getBodyContentsDecodedAsInt();
    }
}
