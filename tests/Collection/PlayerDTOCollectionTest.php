<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\PlayerDTOCollection;
use SeraPHP\DTO\PlayerDTO;

final class PlayerDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'players' => [
                'name' => 'Player One',
                'rank' => 0,
                'lp' => 367,
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
