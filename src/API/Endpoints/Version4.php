<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints;

use SeraPHP\API\AbstractApi;
use SeraPHP\API\AbstractAPIFactory;
use SeraPHP\API\Endpoints\Version4\ChampionMastery;
use SeraPHP\API\Endpoints\Version4\League;
use SeraPHP\API\Endpoints\Version4\LeagueExp;
use SeraPHP\API\Endpoints\Version4\LolStatus;
use SeraPHP\API\Endpoints\Version4\Match_;
use SeraPHP\API\Endpoints\Version4\Spectator;
use SeraPHP\API\Endpoints\Version4\Summoner;
use SeraPHP\API\Endpoints\Version4\ThirdPartyCode;
use SeraPHP\API\Endpoints\Version5\Tournament;
use SeraPHP\API\Endpoints\Version5\TournamentStub;
use SeraPHP\Exceptions\Riot\InvalidApiEndpointException;

final class Version4 extends AbstractAPIFactory
{
    private const SUMMONER = 'summoner';
    private const THIRD_PARTY_CODE = 'third_party_code';
    private const CHAMPION_MASTERY = 'champion_mastery';
    private const SPECTATOR = 'spectator';
    private const LEAGUE = 'league';
    private const MATCH_ = 'match';
    private const LEAGUE_EXP = 'league_exp';
    private const LOL_STATUS = 'lol_status';

    public function getSummoner(): Summoner
    {
        /** @var Summoner $api */
        $api = $this->createApi(self::SUMMONER);

        return $api;
    }

    public function getThirdPartyCode(): ThirdPartyCode
    {
        /** @var ThirdPartyCode $api */
        $api = $this->createApi(self::THIRD_PARTY_CODE);

        return $api;
    }

    public function getChampionMastery(): ChampionMastery
    {
        /** @var ChampionMastery $api */
        $api = $this->createApi(self::CHAMPION_MASTERY);

        return $api;
    }

    public function getSpectator(): Spectator
    {
        /** @var Spectator $api */
        $api = $this->createApi(self::SPECTATOR);

        return $api;
    }

    public function getLeague(): League
    {
        /** @var League $api */
        $api = $this->createApi(self::LEAGUE);

        return $api;
    }

    public function getMatch(): Match_
    {
        /** @var Match_ $api */
        $api = $this->createApi(self::MATCH_);

        return $api;
    }

    public function getLeagueExp(): LeagueExp
    {
        /** @var LeagueExp $api */
        $api = $this->createApi(self::LEAGUE_EXP);

        return $api;
    }

    public function getLolStatus(): LolStatus
    {
        /** @var LolStatus $api */
        $api = $this->createApi(self::LOL_STATUS);

        return $api;
    }

    protected function createApiMap(string $key): AbstractApi
    {
        return match ($key) {
            self::SUMMONER => new Summoner($this->connection),
            self::THIRD_PARTY_CODE => new ThirdPartyCode($this->connection),
            self::CHAMPION_MASTERY => new ChampionMastery($this->connection),
            self::SPECTATOR => new Spectator($this->connection),
            self::LEAGUE => new League($this->connection),
            self::MATCH_ => new Match_($this->connection),
            self::LEAGUE_EXP => new LeagueExp($this->connection),
            self::LOL_STATUS => new LolStatus($this->connection),
            default => throw new InvalidApiEndpointException(),
        };
    }
}
