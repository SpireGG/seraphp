<?php

declare(strict_types=1);

namespace SeraPHP;

use SeraPHP\API\Endpoints\Version1;
use SeraPHP\API\Endpoints\Version3;
use SeraPHP\API\Endpoints\Version4;

class SeraPHP extends ASeraPHP
{
    public function getAccount(): Version1\Account
    {
        return $this->getVersion1()->getAccount();
    }

    public function getLorRanked(): Version1\LorRanked
    {
        return $this->getVersion1()->getLorRanked();
    }

    public function getLorMatch(): Version1\LorMatch
    {
        return $this->getVersion1()->getLorMatch();
    }

    public function getClash(): Version1\Clash
    {
        return $this->getVersion1()->getClash();
    }

    public function getTftSummoner(): Version1\TftSummoner
    {
        return $this->getVersion1()->getTftSummoner();
    }

    public function getTftLeague(): Version1\TftLeague
    {
        return $this->getVersion1()->getTftLeague();
    }

    public function getTftMatch(): Version1\TftMatch
    {
        return $this->getVersion1()->getTftMatch();
    }

    public function getValContent(): Version1\ValContent
    {
        return $this->getVersion1()->getValContent();
    }

    public function getChampion(): Version3\Champion
    {
        return $this->getVersion3()->getChampion();
    }

    public function getSummoner(): Version4\Summoner
    {
        return $this->getVersion4()->getSummoner();
    }

    public function getThirdPartyCode(): Version4\ThirdPartyCode
    {
        return $this->getVersion4()->getThirdPartyCode();
    }

    public function getChampionMastery(): Version4\ChampionMastery
    {
        return $this->getVersion4()->getChampionMastery();
    }

    public function getSpectator(): Version4\Spectator
    {
        return $this->getVersion4()->getSpectator();
    }

    public function getLeague(): Version4\League
    {
        return $this->getVersion4()->getLeague();
    }

    public function getMatch(): Version4\Match_
    {
        return $this->getVersion4()->getMatch();
    }

    public function getTournamentStub(): Version4\TournamentStub
    {
        return $this->getVersion4()->getTournamentStub();
    }

    public function getTournament(): Version4\Tournament
    {
        return $this->getVersion4()->getTournament();
    }

    public function getLeagueExp(): Version4\LeagueExp
    {
        return $this->getVersion4()->getLeagueExp();
    }

    public function getLolStatus(): Version4\LolStatus
    {
        return $this->getVersion4()->getLolStatus();
    }
}
