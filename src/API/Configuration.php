<?php

declare(strict_types=1);

namespace SeraPHPhine\API;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class Configuration
{
    private string $region;
    private string $platform;
    private string $apiKey;
    private string $apiKeyMethod = self::API_KEY_METHOD_HEADER;
    private string $cacheProvider = FilesystemAdapter::class;
    private array $cacheProviderParams = [];
    private string $cacheRateLimit;
    /** @var array<string, int>|int */
    private array|int $cacheCallsLength = 60;
    private string $baseUrl = '.api.riotgames.com';

    public const API_KEY_METHOD_PARAM = 'query';
    public const API_KEY_METHOD_HEADER = 'header';

    public const RESOURCE_CHAMPION = '1237:champion';
    public const RESOURCE_CHAMPIONMASTERY = '1418:champion-mastery';
    public const RESOURCE_LEAGUE = '1424:league';
    public const RESOURCE_SPECTATOR = '1419:spectator';
    public const RESOURCE_STATICDATA = '1351:lol-static-data';
    public const RESOURCE_STATUS = '1514:lol-status';
    public const RESOURCE_SUMMONER = '1416:summoner';
    public const RESOURCE_THIRD_PARTY_CODE = '1426:third-party-code';
    public const RESOURCE_TOURNAMENT = '1436:tournament';
    public const RESOURCE_TOURNAMENT_STUB = '1435:tournament-stub';
    public const RESOURCE_MATCH = '1530:match';

    public function __construct(array $config = [])
    {
        $this->apiKey = $config['api_key'];
        $this->cacheCallLength = [
            self::RESOURCE_CHAMPION => 60 * 10,
            self::RESOURCE_CHAMPIONMASTERY => 60 * 60,
            self::RESOURCE_LEAGUE => 60 * 10,
            self::RESOURCE_MATCH => 0,
            self::RESOURCE_SPECTATOR => 0,
            self::RESOURCE_STATICDATA => 60 * 60 * 24,
            self::RESOURCE_STATUS => 60,
            self::RESOURCE_SUMMONER => 60 * 60,
            self::RESOURCE_THIRD_PARTY_CODE => 0,
            self::RESOURCE_TOURNAMENT => 0,
            self::RESOURCE_TOURNAMENT_STUB => 0,
        ];
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

    public function getCacheRateLimit(): string
    {
        return $this->cacheRateLimit;
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
}
