<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version1;

use SeraPHPhine\API\Endpoints\Version1\Clash;
use SeraPHPhine\Collection\Clash\PlayerDTOCollection;
use SeraPHPhine\Collection\Clash\TournamentDTOCollection;
use SeraPHPhine\DTO\Clash\TeamDTO;
use SeraPHPhine\DTO\Clash\TournamentDTO;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class ClashTest extends APITestCase
{
    public function testGetPlayersBySummonerIdReturnsPlayerDTOCollectionOnSuccess(): void
    {
        $clash = new Clash($this->createObjectConnectionMock(
            'lol/clash/v1/players/by-summoner/1',
            [],
            'eun1',
        ));
        $result = $clash->getPlayersBySummonerId('1', RegionEnum::EUN1());
        self::assertInstanceOf(PlayerDTOCollection::class, $result);
    }

    public function testGetTeamByIdReturnsTeamDTOOnSuccess(): void
    {
        $clash = new Clash($this->createObjectConnectionMock(
            'lol/clash/v1/teams/1',
            [
                'id' => '1',
                'tournamentId' => 2,
                'name' => 'Team One',
                'iconId' => 5,
                'tier' => 3,
                'captain' => 'summoner-id',
                'abbreviation' => 't-o',
                'players' => [],
            ],
            'eun1',
        ));
        $result = $clash->getTeamById('1', RegionEnum::EUN1());
        self::assertInstanceOf(TeamDTO::class, $result);
    }

    public function testGetTournamentsReturnsTournamentDTOCollectionOnSuccess(): void
    {
        $clash = new Clash($this->createObjectConnectionMock(
            'lol/clash/v1/tournaments',
            [],
            'eun1',
        ));
        $result = $clash->getTournaments(RegionEnum::EUN1());
        self::assertInstanceOf(TournamentDTOCollection::class, $result);
    }

    public function testGetTournamentByTeamIdReturnsTournamentDTOOnSuccess(): void
    {
        $clash = new Clash($this->createObjectConnectionMock(
            'lol/clash/v1/tournaments/by-team/1',
            [
                'id' => 1,
                'themeId' => 2,
                'nameKey' => 'name-key',
                'nameKeySecondary' => 'name-key-secondary',
                'schedule' => [],
            ],
            'eun1',
        ));
        $result = $clash->getTournamentByTeamId('1', RegionEnum::EUN1());
        self::assertInstanceOf(TournamentDTO::class, $result);
    }

    public function testGetTournamentByIdReturnsTournamentDTOOnSuccess(): void
    {
        $clash = new Clash($this->createObjectConnectionMock(
            'lol/clash/v1/tournaments/1',
            [
                'id' => 1,
                'themeId' => 2,
                'nameKey' => 'name-key',
                'nameKeySecondary' => 'name-key-secondary',
                'schedule' => [],
            ],
            'eun1',
        ));
        $result = $clash->getTournamentById('1', RegionEnum::EUN1());
        self::assertInstanceOf(TournamentDTO::class, $result);
    }
}
