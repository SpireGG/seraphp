<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\GameCustomizationObjectDTOCollection;
use SeraPHP\DTO\Lol\GameCustomizationObjectDTO;

final class GameCustomizationObjectDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'category' => 'a1',
                'content' => 'b2',
            ],
        ];
        $object = GameCustomizationObjectDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(GameCustomizationObjectDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = GameCustomizationObjectDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
