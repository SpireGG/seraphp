<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\API\AbstractAPIFactory;
use SeraPHPhine\API\Endpoints\Version3\Champion;
use SeraPHPhine\Exceptions\Riot\InvalidApiEndpointException;

final class Version3 extends AbstractAPIFactory
{
    private const CHAMPION = 'champion';
    private const LOL_STATUS = 'lol_status';

    public function getChampion(): Champion
    {
        /** @var Champion $api */
        $api = $this->createApi(self::CHAMPION);

        return $api;
    }

    protected function createApiMap(string $key): AbstractApi
    {
        return match ($key) {
            self::CHAMPION => new Champion($this->connection),
            default => throw new InvalidApiEndpointException(),
        };
    }
}
