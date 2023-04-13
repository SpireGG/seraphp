<?php

namespace SeraPHP\API\RateLimit;

use SeraPHP\Enum\RegionEnum;

class RateLimitStorage
{
    protected array $limits = [];

    public function __construct()
    {
        foreach (RegionEnum::values() as $region) {
            $this->limits[$region->getValue()] = [];
        }
    }

    public function clear(): bool
    {
        $this->limits = [];

        return true;
    }

    protected static function parseLimitHeaders($header): array
    {
        $limits = [];
        foreach (explode(',', $header) as $limitInterval) {
            $limitInterval = explode(':', $limitInterval);
            $limit = (int) $limitInterval[0];
            $interval = (int) $limitInterval[1];

            $limits[$interval] = $limit;
        }

        return $limits;
    }

    /**
     *   Initializes limits for provided API key on all regions.
     */
    public function initApp(string $api_key, string $region, array $limits): void
    {
        $output = [];
        foreach ($limits as $interval => $limit) {
            $output[$interval] = [
                'used' => 0,
                'limit' => $limit,
                'expires' => time() + $interval,
            ];
        }
        $this->limits[$region][$api_key]['app'] = $output;
    }

    /**
     *   Initializes limits for providede API key on all regions.
     */
    public function initMethod(string $api_key, string $region, string $endpoint, array $limits): void
    {
        $output = [];
        foreach ($limits as $interval => $limit) {
            $output[$interval] = [
                'used' => 0,
                'limit' => $limit,
                'expires' => time() + $interval,
            ];
        }
        $this->limits[$region][$api_key]['method'][$endpoint] = $output;
    }

    /**
     *   Returns interval limits for provided API key on provided region.
     */
    public function getAppLimits(string $api_key, string $region): mixed
    {
        return @$this->limits[$region][$api_key]['app'];
    }

    /**
     *   Returns interval limits for provided API key on provided region.
     */
    public function getMethodLimits(string $api_key, string $region, string $endpoint): mixed
    {
        return @$this->limits[$region][$api_key]['method'][$endpoint];
    }

    /**
     *   Sets new value for used API calls for provided API key on provided region.
     */
    public function setAppUsed(string $api_key, string $region, int $timeInterval, int $value): void
    {
        $this->limits[$region][$api_key]['app'][$timeInterval]['used'] = $value;
        if (1 === $value) {
            $this->limits[$region][$api_key]['app'][$timeInterval]['expires'] = time() + $timeInterval;
        }
    }

    /**
     *   Sets new value for used API calls for provided API key on provided region.
     */
    public function setMethodUsed(string $api_key, string $region, string $endpoint, int $timeInterval, int $value): void
    {
        $this->limits[$region][$api_key]['method'][$endpoint][$timeInterval]['used'] = $value;
        if (1 === $value) {
            $this->limits[$region][$api_key]['method'][$endpoint][$timeInterval]['expires'] = time() + $timeInterval;
        }
    }

    public function canCall(string $api_key, string $region, string $resource, string $endpoint): bool
    {
        $appLimits = $this->getAppLimits($api_key, $region);
        // FIXME: Exclude staticdata resource from rate-limit constraints
        if (is_array($appLimits)) { // && $resource != LeagueAPI::RESOURCE_STATICDATA)
            foreach ($appLimits as $timeInterval => $limits) {
                //  Check all saved intervals for this region
                if ($limits['used'] >= $limits['limit'] && $limits['expires'] > time()) {
                    return false;
                }
            }
        }

        $methodLimits = $this->getMethodLimits($api_key, $region, $endpoint);
        if (is_array($methodLimits)) {
            foreach ($methodLimits as $timeInterval => $limits) {
                //  Check all saved intervals for this endpoint
                if ($limits['used'] >= $limits['limit'] && $limits['expires'] > time()) {
                    return false;
                }
            }
        }

        return true;
    }

    public function registerAppLimits(string $api_key, string $region, string $app_header): void
    {
        $limits = self::parseLimitHeaders($app_header);
        $this->initApp($api_key, $region, $limits);
    }

    public function registerMethodLimits(string $api_key, string $region, string $endpoint, string $method_header): void
    {
        $limits = self::parseLimitHeaders($method_header);
        $this->initMethod($api_key, $region, $endpoint, $limits);
    }

    public function registerCall(string $api_key, string $region, string $endpoint, string $app_header = null, string $method_header = null): void
    {
        if ($app_header) {
            $limits = self::parseLimitHeaders($app_header);
            foreach ($limits as $interval => $used) {
                $this->setAppUsed($api_key, $region, $interval, $used);
            }
        }

        if ($method_header) {
            $limits = self::parseLimitHeaders($method_header);
            foreach ($limits as $interval => $used) {
                $this->setMethodUsed($api_key, $region, $endpoint, $interval, $used);
            }
        }
    }
}
