<?php

declare(strict_types=1);

namespace SeraPHP\API;

use SeraPHP\API\Endpoints\Version3 as V3;
use SeraPHP\API\Endpoints\Version4 as V4;
use SeraPHP\API\Endpoints\Version5 as V5;
use SeraPHP\Enum\GeoRegionEnum;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class Configuration
{
    private string $region;
    private string $platform;
    private string $apiKey;
    private string $apiKeyMethod = self::API_KEY_METHOD_HEADER;
    private string $cacheProvider;
    private array $cacheProviderParams = [];
    /** @var array<string, int>|int */
    private array|int $cacheCallsLength = 60;
    private string $baseUrl = '.api.riotgames.com';

    public const API_KEY_METHOD_PARAM = 'query';
    public const API_KEY_METHOD_HEADER = 'header';
    private string $cacheCalls;

    public const RESOURCE_STATICDATA = '1351:lol-static-data';

    public function __construct(array $config = [])
    {
        $this->apiKey = $config['api_key'];
        $this->region = $config['region'] ?? GeoRegionEnum::EUROPE()->getValue();
        $this->platform = $config['platform'] ?? GeoRegionEnum::EUROPE()->getValue();
        $this->cacheProvider = $config['cacheProvider'] ?? FilesystemAdapter::class;
        $this->setCacheCallsLength($config['cacheCallsLength'] ?? null);
    }

    public function validate(): void
    {
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getApiKeyMethod(): string
    {
        return $this->apiKeyMethod;
    }

    public function getCacheProvider(): string
    {
        return $this->cacheProvider;
    }

    public function getCacheProviderParams(): array
    {
        if (!$this->cacheProviderParams) {
            return [
                'RiotAPI-Default', // namespace
                0, // default lifetime
                sys_get_temp_dir().'/RiotAPI', // directory
            ];
        }

        return $this->cacheProviderParams;
    }

    public function setCacheCalls(string $cacheCall): self
    {
        $this->cacheCalls = $cacheCall;

        return $this;
    }

    public function getCacheCalls(): string
    {
        return $this->cacheCalls;
    }

    public function getCacheCallsLength(): array|int
    {
        return $this->cacheCallsLength;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setCacheCallsLength(array|int|null $cacheCallsLength): self
    {
        $defaultCallsLength = [
            V3\Champion::RESOURCE_CHAMPION => 60 * 10,
            V4\ChampionMastery::RESOURCE_CHAMPIONMASTERY => 60 * 60,
            V4\League::RESOURCE_LEAGUE => 60 * 10,
            V4\Match_::RESOURCE_MATCH => 0,
            V4\Spectator::RESOURCE_SPECTATOR => 0,
            self::RESOURCE_STATICDATA => 60 * 60 * 24,
            V4\LolStatus::RESOURCE_STATUS => 60,
            V4\Summoner::RESOURCE_SUMMONER => 60 * 60,
            V4\ThirdPartyCode::RESOURCE_THIRD_PARTY_CODE => 0,
            V4\Tournament::RESOURCE_TOURNAMENT => 0,
            V4\TournamentStub::RESOURCE_TOURNAMENT_STUB => 0,
            V5\Match_::RESOURCE_MATCH => 0,
        ];

        if (!$cacheCallsLength) {
            $this->cacheCallsLength = $defaultCallsLength;

            return $this;
        }

        if (is_int($cacheCallsLength)) {
            $this->cacheCallsLength = $cacheCallsLength;

            return $this;
        }

        $this->cacheCallsLength = array_merge($defaultCallsLength, $cacheCallsLength);

        return $this;
    }
}
