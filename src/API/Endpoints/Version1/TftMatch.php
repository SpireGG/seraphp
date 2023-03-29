<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version1;

use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\Tft\MatchDTO;
use SeraPHPhine\Enum\GeoRegionEnum;
use SeraPHPhine\Exception as RiotException;

final class TftMatch extends AbstractApi
{
    /**
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
    public function getByPuuid(string $puuid, GeoRegionEnum $geoRegion, int $count = 20): array
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('tft/match/v1/matches/by-puuid/%s/ids?count=%d', $puuid, $count)
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
    public function getById(string $matchId, GeoRegionEnum $geoRegion): MatchDTO
    {
        $response = $this->riotConnection->get(
            $geoRegion->getValue(),
            sprintf('tft/match/v1/matches/%s', $matchId),
        );

        return MatchDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}