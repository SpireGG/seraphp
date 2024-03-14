<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\FeaturedGameInfoDTOCollection;
use SeraPHP\DTO\Lol\FeaturedGamesDTOV4;

final class FeaturedGamesDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'gameList' => [],
            'clientRefreshInterval' => 300,
        ];
        $object = FeaturedGamesDTOV4::createFromArray($data);
        self::assertInstanceOf(FeaturedGameInfoDTOCollection::class, $object->getGameList());
        self::assertSame(300, $object->getClientRefreshInterval());
    }
}
