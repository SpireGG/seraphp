<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version4;

use SeraPHPhine\API\Endpoints\Version4\TournamentStub;
use SeraPHPhine\DTO\LobbyEventDTOWrapperDTO;
use SeraPHPhine\Enum\MapTypeEnum;
use SeraPHPhine\Enum\PickTypeEnum;
use SeraPHPhine\Enum\SpectatorTypeEnum;
use SeraPHPhine\Enum\TournamentRegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class TournamentStubTest extends APITestCase
{
    public function testCreateCodeReturnsArrayOnSuccess(): void
    {
        $tournamentStub = new TournamentStub($this->createObjectConnectionMock(
            'lol/tournament-stub/v4/codes?count=1&tournamentId=5',
            ['summoner-id'],
            'americas',
            'post'
        ));
        $result = $tournamentStub->createCode(
            5,
            1,
            [],
            1,
            PickTypeEnum::TOURNAMENT_DRAFT(),
            MapTypeEnum::SUMMONERS_RIFT(),
            SpectatorTypeEnum::ALL(),
            null
        );
        self::assertIsArray($result);
        self::assertArrayHasKey(0, $result);
        self::assertSame('summoner-id', $result[0]);
    }

    public function testGetLobbyEventsByTournamentCodeReturnsLobbyEventDTOWrapperDTOOnSuccess(): void
    {
        $tournamentStub = new TournamentStub($this->createObjectConnectionMock(
            'lol/tournament-stub/v4/lobby-events/by-code/tournament-code',
            ['eventList' => []],
            'americas',
        ));
        $result = $tournamentStub->getLobbyEventsByTournamentCode('tournament-code');
        self::assertInstanceOf(LobbyEventDTOWrapperDTO::class, $result);
    }

    public function testCreateProviderReturnsIntegerOnSuccess(): void
    {
        $tournamentStub = new TournamentStub($this->createIntConnectionMock(
            'lol/tournament-stub/v4/providers',
            5,
            'americas',
            'post',
        ));
        $result = $tournamentStub->createProvider(TournamentRegionEnum::EUNE(), 'http://localhost');
        self::assertSame(5, $result);
    }

    public function testCreateTournamentReturnsIntegerOnSuccess(): void
    {
        $tournamentStub = new TournamentStub($this->createIntConnectionMock(
            'lol/tournament-stub/v4/tournaments',
            5,
            'americas',
            'post',
        ));
        $result = $tournamentStub->createTournament(1, 'name');
        self::assertSame(5, $result);
    }
}
