<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\Deprecated\ParticipantIdentityDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\ParticipantIdentityDTO;

final class ParticipantIdentityDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
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
            ],
        ];
        $object = ParticipantIdentityDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(ParticipantIdentityDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = ParticipantIdentityDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
