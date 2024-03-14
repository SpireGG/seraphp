<?php

declare(strict_types=1);

namespace SeraPHP;

use SeraPHP\API\Endpoints\Version1;
use SeraPHP\API\Endpoints\Version3;
use SeraPHP\API\Endpoints\Version4;
use SeraPHP\API\Endpoints\Version5;

class Seraphphine extends ASeraphphine
{
    public function getAccount(): Version1\Account
    {
        return $this->getVersion1()->getAccount();
    }

    public function getChampionMastery(): Version4\ChampionMastery
    {
        return $this->getVersion4()->getChampionMastery();
    }

    public function getChampion(): Version3\Champion
    {
        return $this->getVersion3()->getChampion();
    }

    public function getClash(): Version1\Clash
    {
        return $this->getVersion1()->getClash();
    }

    public function getLeagueExp(): Version4\LeagueExp
    {
        return $this->getVersion4()->getLeagueExp();
    }

    public function getLeague(): Version4\League
    {
        return $this->getVersion4()->getLeague();
    }

    public function getLolChallenge(): void
    {
        // @TODO
    }

    public function getLolStatus(): Version4\LolStatus
    {
        return $this->getVersion4()->getLolStatus();
    }

    public function getLorDeck(): void
    {
        // @TODO
    }

    public function getLorInventory(): void
    {
        // @TODO
    }

    public function getLorMatch(): Version1\LorMatch
    {
        return $this->getVersion1()->getLorMatch();
    }

    public function getLorRanked(): Version1\LorRanked
    {
        return $this->getVersion1()->getLorRanked();
    }

    public function getLorStatus(): void
    {
        // @TODO
    }

    public function getMatch(): Version5\Match_
    {
        return $this->getVersion5()->getMatch();
    }

    public function getSpectator4(): Version4\Spectator
    {
        return $this->getVersion4()->getSpectator();
    }

    public function getSpectator(): Version5\Spectator
    {
        return $this->getVersion5()->getSpectator();
    }

    public function getSummoner(): Version4\Summoner
    {
        return $this->getVersion4()->getSummoner();
    }

    public function getTftLeague(): Version1\TftLeague
    {
        return $this->getVersion1()->getTftLeague();
    }

    public function getTftMatch(): Version1\TftMatch
    {
        return $this->getVersion1()->getTftMatch();
    }

    public function getTftStatus(): void
    {
        // @TODO
    }

    public function getTftSummoner(): Version1\TftSummoner
    {
        return $this->getVersion1()->getTftSummoner();
    }

    public function getTournamentStub(): null
    {
        return $this->getVersion5()->getTournamentStub();
    }

    public function getTournament(): null
    {
        return $this->getVersion5()->getTournament();
    }

    public function getValContent(): Version1\ValContent
    {
        return $this->getVersion1()->getValContent();
    }

    public function getValMatch(): void
    {
        // @TODO
    }

    public function getValRanked(): void
    {
        // @TODO
    }

    public function getValStatus(): void
    {
        // @TODO
    }

    public function getThirdPartyCode(): Version4\ThirdPartyCode
    {
        return $this->getVersion4()->getThirdPartyCode();
    }
}
