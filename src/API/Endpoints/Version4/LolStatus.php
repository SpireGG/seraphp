<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\DTO\PlatformDataDTO;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Exception as RiotException;

final class LolStatus extends AbstractApi
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
    public function getPlatformData(RegionEnum $region): PlatformDataDTO
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            'lol/status/v4/platform-data',
        );

        return PlatformDataDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
