<?php

declare(strict_types=1);

namespace SeraPHP\API\RateLimit;

use SeraPHP\Enum\RegionEnum;

class RateLimitControl implements IRateLimitControl
{
    protected RateLimitStorage $storage;

    public function __construct()
    {
        $this->storage = new RateLimitStorage();
    }

    public function clear(): bool
    {
        return $this->storage->clear();
    }

    /**
     *   Returns currently stored status of limits for given API key, region and endpoint.
     */
    public function getCurrentStatus(string $api_key, string $region, string $endpoint): array
    {
        return [
            'app' => $this->storage->getAppLimits($api_key, $region),
            'method' => $this->storage->getMethodLimits($api_key, $region, $endpoint),
        ];
    }

    public function canCall(string $api_key, string $region, string $resource, string $endpoint): bool
    {
        return $this->storage->canCall($api_key, $region, $resource, $endpoint);
    }

    public function registerLimits(string $api_key, string $region, string $endpoint, ?string $app_header, ?string $method_header): void
    {
        if ($app_header) {
            $this->storage->registerAppLimits($api_key, $region, $app_header);
        }

        if ($method_header) {
            $this->storage->registerMethodLimits($api_key, $region, $endpoint, $method_header);
        }
    }

    public function registerCall(string $api_key, string $region, string $endpoint, ?string $app_header, ?string $method_header): void
    {
        $this->storage->registerCall($api_key, $region, $endpoint, $app_header, $method_header);
    }
}
