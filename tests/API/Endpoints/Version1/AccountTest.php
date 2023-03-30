<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version1;

use SeraPHPhine\API\Endpoints\Version1\Account;
use SeraPHPhine\DTO\AccountDTO;
use SeraPHPhine\DTO\ActiveShardDTO;
use SeraPHPhine\Enum\GeoRegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class AccountTest extends APITestCase
{
    public function testGetByPuuidReturnsAccountDTOOnSuccess(): void
    {
        $account = new Account($this->createObjectConnectionMock(
            'riot/account/v1/accounts/by-puuid/1',
            [
                'puuid' => 'a1',
                'gameName' => 'b2',
                'tagLine' => 'EUNE',
            ],
            'europe'
        ));
        $result = $account->getByPuuid('1', GeoRegionEnum::EUROPE());
        self::assertInstanceOf(AccountDTO::class, $result);
    }

    public function testGetByGameNameAndTagLineReturnsAccountDTOOnSuccess(): void
    {
        $account = new Account($this->createObjectConnectionMock(
            'riot/account/v1/accounts/by-riot-id/1/2',
            [
                'puuid' => 'a1',
                'gameName' => 'b2',
                'tagLine' => 'EUNE',
            ],
            'europe'
        ));
        $result = $account->getByGameNameAndTagLine('1', '2', GeoRegionEnum::EUROPE());
        self::assertInstanceOf(AccountDTO::class, $result);
    }

    public function testGetByGameAndPuuidReturnsActiveShardDTOOnSuccess(): void
    {
        $account = new Account($this->createObjectConnectionMock(
            'riot/account/v1/active-shards/by-game/1/by-puuid/2',
            [
                'puuid' => 'a1',
                'game' => 'b2',
                'activeShard' => 'c3',
            ],
            'europe'
        ));
        $result = $account->getByGameAndPuuid('1', '2', GeoRegionEnum::EUROPE());
        self::assertInstanceOf(ActiveShardDTO::class, $result);
    }
}
