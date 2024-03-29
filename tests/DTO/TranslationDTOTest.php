<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\TranslationDTO;

final class TranslationDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'updated_at' => 'a',
            'locale' => 'b',
            'content' => 'c',
        ];
        $object = TranslationDTO::createFromArray($data);
        self::assertEquals('a', $object->getUpdatedAt());
        self::assertEquals('b', $object->getLocale());
        self::assertEquals('c', $object->getContent());
    }

    public function testCreateFromArrayHandlesMissingPropertiesProperly(): void
    {
        $data = [
            'locale' => 'b',
            'content' => 'c',
        ];
        $object = TranslationDTO::createFromArray($data);
        self::assertNull($object->getUpdatedAt());
        self::assertEquals('b', $object->getLocale());
        self::assertEquals('c', $object->getContent());
    }
}
