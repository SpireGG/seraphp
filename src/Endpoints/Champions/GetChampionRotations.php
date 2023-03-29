<?php

declare(strict_types=1);

namespace SeraPHPhine\Endpoints\Champions;

use SeraPHPhine\ApiRequest;
use SeraPHPhine\Objects\ChampionInfo;

/**
 *     @see https://developer.riotgames.com/apis#champion-v3
 */
class GetChampionRotations extends ApiRequest
{
    public const RESOURCE_CHAMPION = '1237:champion';
    public const RESOURCE_CHAMPION_VERSION = 'v3';

    public function __invoke(): ChampionInfo
    {
        $resultPromise = $this->setEndpoint('/lol/platform/'.self::RESOURCE_CHAMPION_VERSION.'/champion-rotations')
            ->setResource(self::RESOURCE_CHAMPION, '/champion-rotations')
            ->makeCall();

        return $this->resolveOrEnqueuePromise($resultPromise, function (array $result) {
            return new ChampionInfo($result);
        });
    }
}
