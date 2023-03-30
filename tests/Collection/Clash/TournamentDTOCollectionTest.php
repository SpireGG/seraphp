<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Clash;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Clash\TournamentDTOCollection;
use SeraPHPhine\DTO\Clash\TournamentDTO;

final class TournamentDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'id' => 1,
                'themeId' => 2,
                'nameKey' => 'key',
                'nameKeySecondary' => 'secondary-key',
                'schedule' => [],
            ],
        ];
        $object = TournamentDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(TournamentDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = TournamentDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
