<?php

declare(strict_types=1);

namespace SeraPHP\Tests\API\Endpoints\Version4;

use SeraPHP\API\Endpoints\Version4\Summoner;
use SeraPHP\DTO\SummonerDTO;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Tests\APITestCase;

final class SummonerTest extends APITestCase
{
    public function testGetByNameReturnsSummonerDTOOnSuccess(): void
    {
        $summoner = new Summoner($this->createObjectConnectionMock(
            'lol/summoner/v4/summoners/by-name/simivar',
            [
                'accountId' => '1',
                'profileIconId' => 2,
                'revisionDate' => 3,
                'name' => '4',
                'id' => '5',
                'puuid' => '6',
                'summonerLevel' => 7,
            ],
            'eun1',
        ));
        $result = $summoner->getByName('simivar', RegionEnum::EUN1());
        self::assertInstanceOf(SummonerDTO::class, $result);
    }

    public function testGetByAccountIdReturnsSummonerDTOOnSuccess(): void
    {
        $summoner = new Summoner($this->createObjectConnectionMock(
            'lol/summoner/v4/summoners/by-account/simivar',
            [
                'accountId' => '1',
                'profileIconId' => 2,
                'revisionDate' => 3,
                'name' => '4',
                'id' => '5',
                'puuid' => '6',
                'summonerLevel' => 7,
            ],
            'eun1',
        ));
        $result = $summoner->getByAccountId('simivar', RegionEnum::EUN1());
        self::assertInstanceOf(SummonerDTO::class, $result);
    }

    public function testGetByPuuidReturnsSummonerDTOOnSuccess(): void
    {
        $summoner = new Summoner($this->createObjectConnectionMock(
            'lol/summoner/v4/summoners/by-puuid/simivar',
            [
                'accountId' => '1',
                'profileIconId' => 2,
                'revisionDate' => 3,
                'name' => '4',
                'id' => '5',
                'puuid' => '6',
                'summonerLevel' => 7,
            ],
            'eun1',
        ));
        $result = $summoner->getByPuuid('simivar', RegionEnum::EUN1());
        self::assertInstanceOf(SummonerDTO::class, $result);
    }

    public function testGetByIdReturnsSummonerDTOOnSuccess(): void
    {
        $summoner = new Summoner($this->createObjectConnectionMock(
            'lol/summoner/v4/summoners/simivar',
            [
                'accountId' => '1',
                'profileIconId' => 2,
                'revisionDate' => 3,
                'name' => '4',
                'id' => '5',
                'puuid' => '6',
                'summonerLevel' => 7,
            ],
            'eun1',
        ));
        $result = $summoner->getById('simivar', RegionEnum::EUN1());
        self::assertInstanceOf(SummonerDTO::class, $result);
    }
}
