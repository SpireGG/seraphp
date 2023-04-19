<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints;

use SeraPHP\API\AbstractApi;
use SeraPHP\API\AbstractAPIFactory;
use SeraPHP\API\Endpoints\Version4\Match_;
use SeraPHP\Exceptions\Riot\InvalidApiEndpointException;

final class Version5 extends AbstractAPIFactory
{
    private const MATCH_ = 'match';

    public function getMatch(): Match_
    {
        /** @var Match_ $api */
        $api = $this->createApi(self::MATCH_);

        return $api;
    }

    protected function createApiMap(string $key): AbstractApi
    {
        return match ($key) {
            self::MATCH_ => new Match_($this->connection),
            default => throw new InvalidApiEndpointException(),
        };
    }
}
