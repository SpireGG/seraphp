<?php

declare(strict_types=1);

namespace SeraPHP\API\RateLimit;

use SeraPHP\Enum\RegionEnum;

interface IRateLimitControl
{
    /**
     *   Returns currently stored status of limits for given API key, region and endpoint.
     */
    public function getCurrentStatus(string $api_key, string $region, string $endpoint): array;

    /**
     *   Determines if an API call can be made.
     */
    public function canCall(string $api_key, string $region, string $resource, string $endpoint): bool;

    /**
     *   Registers the API rate limits.
     */
    public function registerLimits(string $api_key, string $region, string $endpoint, ?string $app_header, ?string $method_header);

    /**
     *   Registers that a new API call has been made.
     */
    public function registerCall(string $api_key, string $region, string $endpoint, ?string $app_header, ?string $method_header);

    /**
     *   Clears all currently saved data.
     */
    public function clear(): bool;
}
