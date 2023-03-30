<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Lol\TeamBansDTOCollection;
use SeraPHPhine\DTO\Lol\TeamBansDTO;

final class TeamBansDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'championId' => 555,
                'pickTurn' => 1,
            ],
        ];
        $object = TeamBansDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(TeamBansDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = TeamBansDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
