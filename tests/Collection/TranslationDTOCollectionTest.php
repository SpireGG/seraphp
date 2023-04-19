<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\TranslationDTOCollection;
use SeraPHP\DTO\TranslationDTO;

final class TranslationDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'updated_at' => 'a',
                'locale' => 'b',
                'content' => 'c',
            ],
        ];
        $object = TranslationDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(TranslationDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = TranslationDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
