<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Clash;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Clash\TournamentPhaseDTOCollection;
use SeraPHPhine\DTO\Clash\TournamentDTO;

final class TournamentDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'id' => 1,
            'themeId' => 2,
            'nameKey' => 'key',
            'nameKeySecondary' => 'secondary-key',
            'schedule' => [],
        ];
        $object = TournamentDTO::createFromArray($data);
        self::assertSame(1, $object->getId());
        self::assertSame(2, $object->getThemeId());
        self::assertSame('key', $object->getNameKey());
        self::assertSame('secondary-key', $object->getNameKeySecondary());
        self::assertInstanceOf(TournamentPhaseDTOCollection::class, $object->getSchedule());
    }
}
