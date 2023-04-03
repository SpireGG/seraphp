<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\FeaturedGameInfoDTOCollection;
use SeraPHP\DTO\FeaturedGamesDTO;

final class FeaturedGamesDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'gameList' => [],
            'clientRefreshInterval' => 300,
        ];
        $object = FeaturedGamesDTO::createFromArray($data);
        self::assertInstanceOf(FeaturedGameInfoDTOCollection::class, $object->getGameList());
        self::assertSame(300, $object->getClientRefreshInterval());
    }
}
