<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\API\Endpoints\Version4;

use SeraPHPhine\API\Endpoints\Version4\ThirdPartyCode;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Tests\APITestCase;

final class ThirdPartyCodeTest extends APITestCase
{
    public function testGetBySummonerIdReturnsStringOnSuccess(): void
    {
        $thirdPartyCode = new ThirdPartyCode($this->createStringConnectionMock(
            'lol/platform/v4/third-party-code/by-summoner/simivar',
            'test',
            'eun1',
        ));
        $result = $thirdPartyCode->getBySummonerId('simivar', RegionEnum::EUN1());
        self::assertSame('test', $result);
    }
}
