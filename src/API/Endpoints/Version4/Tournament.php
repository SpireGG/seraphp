<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\LobbyEventDTOWrapperDTO;
use SeraPHPhine\DTO\TournamentCodeDTO;
use SeraPHPhine\Enum\GeoRegionEnum;
use SeraPHPhine\Enum\MapTypeEnum;
use SeraPHPhine\Enum\PickTypeEnum;
use SeraPHPhine\Enum\SpectatorTypeEnum;
use SeraPHPhine\Enum\TournamentRegionEnum;
use SeraPHPhine\Exception as RiotException;
use Webmozart\Assert\Assert;

final class Tournament extends AbstractApi
{
    /**
     * @param array<string> $allowedSummonerIds
     *
     * @return array<string>
     *
     * @throws JsonException
     * @throws RiotException\BadGatewayException
     * @throws RiotException\BadRequestException
     * @throws RiotException\DataNotFoundException
     * @throws RiotException\ForbiddenException
     * @throws RiotException\GatewayTimeoutException
     * @throws RiotException\InternalServerErrorException
     * @throws RiotException\MethodNotAllowedException
     * @throws RiotException\RateLimitExceededException
     * @throws RiotException\ServiceUnavailableException
     * @throws RiotException\UnauthorizedException
     * @throws RiotException\UnsupportedMediaTypeException
     * @throws ClientExceptionInterface
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
            sprintf('lol/tournament/v4/codes?count=%d&tournamentId=%d', $count, $tournamentId),
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
     *
     * @throws JsonException
     * @throws RiotException\BadGatewayException
     * @throws RiotException\BadRequestException
     * @throws RiotException\DataNotFoundException
     * @throws RiotException\ForbiddenException
     * @throws RiotException\GatewayTimeoutException
     * @throws RiotException\InternalServerErrorException
     * @throws RiotException\MethodNotAllowedException
     * @throws RiotException\RateLimitExceededException
     * @throws RiotException\ServiceUnavailableException
     * @throws RiotException\UnauthorizedException
     * @throws RiotException\UnsupportedMediaTypeException
     * @throws ClientExceptionInterface
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
            sprintf('lol/tournament/v4/codes/%s', $tournamentCode),
            [
                'allowedSummonerIds' => $allowedSummonerIds,
                'pickType' => $pickType->getValue(),
                'mapType' => $mapType->getValue(),
                'spectatorType' => $spectatorType->getValue(),
            ],
        );

        return true;
    }

    /**
     * @throws JsonException
     * @throws RiotException\BadGatewayException
     * @throws RiotException\BadRequestException
     * @throws RiotException\DataNotFoundException
     * @throws RiotException\ForbiddenException
     * @throws RiotException\GatewayTimeoutException
     * @throws RiotException\InternalServerErrorException
     * @throws RiotException\MethodNotAllowedException
     * @throws RiotException\RateLimitExceededException
     * @throws RiotException\ServiceUnavailableException
     * @throws RiotException\UnauthorizedException
     * @throws RiotException\UnsupportedMediaTypeException
     * @throws ClientExceptionInterface
     */
    public function getCodeByTournamentCode(string $tournamentCode): TournamentCodeDTO
    {
        $response = $this->riotConnection->get(
            GeoRegionEnum::AMERICAS()->getValue(),
            sprintf('lol/tournament/v4/codes/%s', $tournamentCode),
        );

        return TournamentCodeDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    /**
     * @throws JsonException
     * @throws RiotException\BadGatewayException
     * @throws RiotException\BadRequestException
     * @throws RiotException\DataNotFoundException
     * @throws RiotException\ForbiddenException
     * @throws RiotException\GatewayTimeoutException
     * @throws RiotException\InternalServerErrorException
     * @throws RiotException\MethodNotAllowedException
     * @throws RiotException\RateLimitExceededException
     * @throws RiotException\ServiceUnavailableException
     * @throws RiotException\UnauthorizedException
     * @throws RiotException\UnsupportedMediaTypeException
     * @throws ClientExceptionInterface
     */
    public function getLobbyEventsByTournamentCode(string $tournamentCode): LobbyEventDTOWrapperDTO
    {
        $response = $this->riotConnection->get(
            GeoRegionEnum::AMERICAS()->getValue(),
            sprintf('lol/tournament/v4/lobby-events/by-code/%s', $tournamentCode),
        );

        return LobbyEventDTOWrapperDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    /**
     * @throws JsonException
     * @throws RiotException\BadGatewayException
     * @throws RiotException\BadRequestException
     * @throws RiotException\DataNotFoundException
     * @throws RiotException\ForbiddenException
     * @throws RiotException\GatewayTimeoutException
     * @throws RiotException\InternalServerErrorException
     * @throws RiotException\MethodNotAllowedException
     * @throws RiotException\RateLimitExceededException
     * @throws RiotException\ServiceUnavailableException
     * @throws RiotException\UnauthorizedException
     * @throws RiotException\UnsupportedMediaTypeException
     * @throws ClientExceptionInterface
     */
    public function createProvider(TournamentRegionEnum $region, string $url): int
    {
        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            'lol/tournament/v4/providers',
            [
                'region' => $region->getValue(),
                'url' => $url,
            ],
        );

        return $response->getBodyContentsDecodedAsInt();
    }

    /**
     * @throws JsonException
     * @throws RiotException\BadGatewayException
     * @throws RiotException\BadRequestException
     * @throws RiotException\DataNotFoundException
     * @throws RiotException\ForbiddenException
     * @throws RiotException\GatewayTimeoutException
     * @throws RiotException\InternalServerErrorException
     * @throws RiotException\MethodNotAllowedException
     * @throws RiotException\RateLimitExceededException
     * @throws RiotException\ServiceUnavailableException
     * @throws RiotException\UnauthorizedException
     * @throws RiotException\UnsupportedMediaTypeException
     * @throws ClientExceptionInterface
     */
    public function createTournament(int $providerId, string $name): int
    {
        $response = $this->riotConnection->post(
            GeoRegionEnum::AMERICAS()->getValue(),
            'lol/tournament/v4/tournaments',
            [
                'providerId' => $providerId,
                'name' => $name,
            ],
        );

        return $response->getBodyContentsDecodedAsInt();
    }
}
