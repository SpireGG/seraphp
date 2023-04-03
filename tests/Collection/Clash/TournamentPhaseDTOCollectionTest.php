<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Clash;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Clash\TournamentPhaseDTOCollection;
use SeraPHP\DTO\Clash\TournamentPhaseDTO;

final class TournamentPhaseDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'id' => 1,
                'registrationTime' => 1234567890,
                'startTime' => 1234567891,
                'cancelled' => false,
            ],
        ];
        $object = TournamentPhaseDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(TournamentPhaseDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = TournamentPhaseDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
