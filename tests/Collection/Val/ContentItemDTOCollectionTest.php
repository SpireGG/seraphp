<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Val;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\Val\ContentItemDTOCollection;
use SeraPHP\DTO\Val\ContentItemDTO;

final class ContentItemDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
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
