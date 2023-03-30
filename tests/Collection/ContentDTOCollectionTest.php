<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\ContentDTOCollection;
use SeraPHPhine\DTO\ContentDTO;

final class ContentDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'locale' => 'en_US',
                'content' => 'Summoner’s Rift Co-op vs AI - Champion Disabled',
            ],
        ];
        $object = ContentDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(ContentDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = ContentDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
