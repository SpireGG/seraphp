<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO\Val;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\Val\ContentItemDTOCollection;
use SeraPHPhine\DTO\Val\ContentItemDTO;

final class ContentItemDTOCollectionTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            [
                'name' => 'Raze',
                'id' => 'F94C3B30-42BE-E959-889C-5AA313DBA261',
                'assetName' => 'Default__Clay_PrimaryAsset_C',
            ],
        ];
        $object = ContentItemDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(ContentItemDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = ContentItemDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
