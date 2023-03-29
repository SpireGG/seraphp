<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\Lol\MatchDTO;
use SeraPHPhine\DTO\Lol\MatchlistDTO;
use SeraPHPhine\DTO\Lol\MatchTimelineDTO;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Exception as RiotException;
use SeraPHPhine\Filter\MatchlistFilter;

final class Match_ extends AbstractApi
{
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
    public function getByMatchId(int $matchId, RegionEnum $region): MatchDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/match/v4/matches/%s', $matchId),
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
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
                $filter ? $filter->getAsHttpQuery() : '',
            ),
        );

        return MatchlistDTO::createFromArray($response->getBodyContentsDecodedAsArray());
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
    public function getTimelineByMatchId(int $matchId, RegionEnum $region): MatchTimelineDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/match/v4/timelines/by-match/%s', $matchId),
        );

        return MatchTimelineDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    /**
     * @return array<int, int>
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
    public function getIdsByTournamentCode(string $tournamentCode, RegionEnum $region): array
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/match/v4/matches/by-tournament-code/%s/ids', $tournamentCode),
        );

        return $response->getBodyContentsDecodedAsArray();
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
    public function getByMatchIdAndTournamentCode(int $matchId, string $tournamentCode, RegionEnum $region): MatchDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/match/v4/matches/%s/by-tournament-code/%s', $matchId, $tournamentCode),
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
