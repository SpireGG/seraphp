<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\Collection\ChampionMasteryDTOCollection;
use SeraPHPhine\DTO\ChampionMasteryDTO;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Exception as RiotException;

final class ChampionMastery extends AbstractApi
{
    /**
     * @return ChampionMasteryDTOCollection<ChampionMasteryDTO>
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
    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): ChampionMasteryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/champion-mastery/v4/champion-masteries/by-summoner/%s', $encryptedSummonerId),
        );

        $championMasteries = $response->getBodyContentsDecodedAsArray();
        $collection = new ChampionMasteryDTOCollection();
        foreach ($championMasteries as $championMastery) {
            $collection->add(ChampionMasteryDTO::createFromArray($championMastery));
        }

        return $collection;
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
    public function getBySummonerIdAndChampionId(
        string $encryptedSummonerId,
        int $championId,
        RegionEnum $region
    ): ChampionMasteryDTO {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'lol/champion-mastery/v4/champion-masteries/by-summoner/%s/by-champion/%s',
                $encryptedSummonerId,
                $championId,
            ),
        );

        return ChampionMasteryDTO::createFromArray($response->getBodyContentsDecodedAsArray());
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
    public function getScoreBySummonerId(string $encryptedSummonerId, RegionEnum $region): int
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'lol/champion-mastery/v4/scores/by-summoner/%s',
                $encryptedSummonerId,
            ),
        );

        return $response->getBodyContentsDecodedAsInt();
    }
}
