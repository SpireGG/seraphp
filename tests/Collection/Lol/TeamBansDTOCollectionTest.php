<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Lol\Deprecated\TeamBansDTOCollection;
use SeraPHP\DTO\Lol\Deprecated\TeamBansDTO;

final class TeamBansDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
