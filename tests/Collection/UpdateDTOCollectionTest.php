<?php

declare(strict_types=1);

namespace SeraPHP\Tests\Collection;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\UpdateDTOCollection;
use SeraPHP\DTO\UpdateDTO;

final class UpdateDTOCollectionTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            [
                'id' => 3214,
                'publish_locations' => [
                    'game',
                    'riotstatus',
                ],
                'publish' => true,
                'translations' => [
                ],
                'created_at' => '2020-11-08T01:25:00.434856+00:00',
                'author' => 'Riot Games',
                'updated_at' => '2020-11-09T12:00:00+00:00',
            ],
        ];
        $object = UpdateDTOCollection::createFromArray($data);
        self::assertFalse($object->isEmpty());
        self::assertInstanceOf(UpdateDTO::class, $object->offsetGet(0));
    }

    public function testCreateFromArrayReturnsEmptyCollectionWhenNoData(): void
    {
        $data = [];
        $object = UpdateDTOCollection::createFromArray($data);
        self::assertTrue($object->isEmpty());
    }
}
