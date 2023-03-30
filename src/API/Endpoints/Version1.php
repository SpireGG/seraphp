<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\API\AbstractAPIFactory;
use SeraPHPhine\API\Endpoints\Version1\Account;
use SeraPHPhine\API\Endpoints\Version1\Clash;
use SeraPHPhine\API\Endpoints\Version1\LorMatch;
use SeraPHPhine\API\Endpoints\Version1\LorRanked;
use SeraPHPhine\API\Endpoints\Version1\TftLeague;
use SeraPHPhine\API\Endpoints\Version1\TftMatch;
use SeraPHPhine\API\Endpoints\Version1\TftSummoner;
use SeraPHPhine\API\Endpoints\Version1\ValContent;
use SeraPHPhine\Exceptions\InvalidApiEndpointException;

final class Version1 extends AbstractAPIFactory
{
    private const ACCOUNT = 'account';
    private const LOR_RANKED = 'lor_ranked';
    private const LOR_MATCH = 'lor_match';
    private const CLASH = 'clash';
    private const TFT_SUMMONER = 'tft_summoner';
    private const TFT_LEAGUE = 'tft_league';
    private const TFT_MATCH = 'tft_match';
    private const VAL_CONTENT = 'val_content';

    public function getAccount(): Account
    {
        /** @var Account $api */
        $api = $this->createApi(self::ACCOUNT);

        return $api;
    }

    public function getLorRanked(): LorRanked
    {
        /** @var LorRanked $api */
        $api = $this->createApi(self::LOR_RANKED);

        return $api;
    }

    public function getLorMatch(): LorMatch
    {
        /** @var LorMatch $api */
        $api = $this->createApi(self::LOR_MATCH);

        return $api;
    }

    public function getClash(): Clash
    {
        /** @var Clash $api */
        $api = $this->createApi(self::CLASH);

        return $api;
    }

    public function getTftSummoner(): TftSummoner
    {
        /** @var TftSummoner $api */
        $api = $this->createApi(self::TFT_SUMMONER);

        return $api;
    }

    public function getTftLeague(): TftLeague
    {
        /** @var TftLeague $api */
        $api = $this->createApi(self::TFT_LEAGUE);

        return $api;
    }

    public function getTftMatch(): TftMatch
    {
        /** @var TftMatch $api */
        $api = $this->createApi(self::TFT_MATCH);

        return $api;
    }

    public function getValContent(): ValContent
    {
        /** @var ValContent $api */
        $api = $this->createApi(self::VAL_CONTENT);

        return $api;
    }

    protected function createApiMap(string $key): AbstractApi
    {
        return match ($key) {
            self::ACCOUNT => new Account($this->connection),
            self::LOR_RANKED => new LorRanked($this->connection),
            self::LOR_MATCH => new LorMatch($this->connection),
            self::CLASH => new Clash($this->connection),
            self::TFT_SUMMONER => new TftSummoner($this->connection),
            self::TFT_LEAGUE => new TftLeague($this->connection),
            self::TFT_MATCH => new TftMatch($this->connection),
            self::VAL_CONTENT => new ValContent($this->connection),
            default => throw new InvalidApiEndpointException(),
        };
    }
}
