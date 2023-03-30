<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\DTO\Lol\ParticipantIdentityDTO;
use SeraPHPhine\DTO\Lol\PlayerDTO;

final class ParticipantIdentityDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'participantId' => 1,
            'player' => [
                'platformId' => 'EUN1',
                'accountId' => 'account-id',
                'summonerName' => 'Player One',
                'summonerId' => 'summoner-id',
                'currentPlatformId' => 'EUN1',
                'currentAccountId' => 'current-account-id',
                'matchHistoryUri' => '/v1/stats/player_history/EUN1/1',
                'profileIcon' => 4787,
            ],
        ];
        $object = ParticipantIdentityDTO::createFromArray($data);
        self::assertSame(1, $object->getParticipantId());
        self::assertInstanceOf(PlayerDTO::class, $object->getPlayer());
    }
}
