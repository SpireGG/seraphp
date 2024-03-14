<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints;

use SeraPHP\API\AbstractApi;
use SeraPHP\API\AbstractAPIFactory;
use SeraPHP\API\Endpoints\Version5\Match_;
use SeraPHP\API\Endpoints\Version5\Spectator;
use SeraPHP\API\Endpoints\Version5\Tournament;
use SeraPHP\API\Endpoints\Version5\TournamentStub;
use SeraPHP\Exceptions\Riot\InvalidApiEndpointException;

final class Version5 extends AbstractAPIFactory
{
    private const MATCH_ = 'match';
    private const SPECTATOR = 'spectator';
    private const TOURNAMENT_STUB = 'tournament_stub';
    private const TOURNAMENT = 'tournament';

    public function getMatch(): Match_
    {
        /** @var Match_ $api */
        $api = $this->createApi(self::MATCH_);

        return $api;
    }

    public function getSpectator(): Spectator
    {
        /** @var Spectator $api */
        $api = $this->createApi(self::SPECTATOR);

        return $api;
    }

    public function getTournamentStub(): TournamentStub
    {
        // @TODO update to v5
        /** @var TournamentStub $api */
        $api = $this->createApi(self::TOURNAMENT_STUB);

        return $api;
    }

    public function getTournament(): Tournament
    {
        // @TODO update to v5
        /** @var Tournament $api */
        $api = $this->createApi(self::TOURNAMENT);

        return $api;
    }

    protected function createApiMap(string $key): AbstractApi
    {
        return match ($key) {
            self::MATCH_ => new Match_($this->connection),
            self::SPECTATOR => new Spectator($this->connection),
            self::TOURNAMENT_STUB => new TournamentStub($this->connection),
            self::TOURNAMENT => new Tournament($this->connection),
            default => throw new InvalidApiEndpointException(),
        };
    }
}
