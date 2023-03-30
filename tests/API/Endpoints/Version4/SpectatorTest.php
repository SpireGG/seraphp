<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version4;

use SeraPHPhine\API\Endpoints\Version4\Spectator;
use SeraPHPhine\Collection\FeaturedGameInfoDTOCollection;
use SeraPHPhine\DTO\CurrentGameInfoDTO;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class SpectatorTest extends APITestCase
{
    public function testGetActiveGamesBySummonerIdReturnsProperObjectOnSuccess(): void
    {
        $spectator = new Spectator($this->createObjectConnectionMock(
            'lol/spectator/v4/active-games/by-summoner/1',
            [
                'gameId' => 1234567890,
                'mapId' => 11,
                'gameMode' => 'CLASSIC',
                'gameType' => 'MATCHED_GAME',
                'gameQueueConfigId' => 440,
                'participants' => [],
                'observers' => [
                    'encryptionKey' => 'XmeGhaThDcaeeJY8Gao5Z55+YJsQ80gX',
                ],
                'platformId' => 'EUN1',
                'bannedChampions' => [],
                'gameStartTime' => 1603484102577,
                'gameLength' => 403,
            ],
            'eun1'
        ));
        $result = $spectator->getActiveGamesBySummonerId('1', RegionEnum::EUN1());
        self::assertInstanceOf(CurrentGameInfoDTO::class, $result);
    }

    public function testGetFeaturedGamesReturnsProperObjectOnSuccess(): void
    {
        $spectator = new Spectator($this->createObjectConnectionMock(
            'lol/spectator/v4/featured-games',
            [
                'gameList' => [],
                'clientRefreshInterval' => 300,
            ],
            'eun1'
        ));
        $result = $spectator->getFeaturedGames(RegionEnum::EUN1());
        self::assertSame(300, $result->getClientRefreshInterval());
        self::assertInstanceOf(FeaturedGameInfoDTOCollection::class, $result->getGameList());
    }
}
