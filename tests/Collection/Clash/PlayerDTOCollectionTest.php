<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Clash;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Clash\PlayerDTOCollection;
use SeraPHP\DTO\Clash\PlayerDTO;

final class PlayerDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'summonerId' => '1',
                'teamId' => '2',
                'position' => 'FILL',
                'role' => 'CAPTAIN',
            ],
        ];
        $object = PlayerDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(PlayerDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = PlayerDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
