<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\TranslationDTOCollection;
use SeraPHP\DTO\MessageDTO;

final class MessageDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'id' => '5e27b2f68d0391127f333f21',
            'author' => '',
            'heading' => '10.02',
            'content' => 'Some content',
            'severity' => 'info',
            'created_at' => '2020-01-22T02:27:02.532Z',
            'updated_at' => '2020-01-22T03:27:02.532Z',
            'translations' => [],
        ];
        $object = MessageDTO::createFromArray($data);
        self::assertSame('5e27b2f68d0391127f333f21', $object->getId());
        self::assertSame('', $object->getAuthor());
        self::assertSame('10.02', $object->getHeading());
        self::assertSame('Some content', $object->getContent());
        self::assertSame('info', $object->getSeverity());
        self::assertSame('2020-01-22T02:27:02.532Z', $object->getCreatedAt());
        self::assertSame('2020-01-22T03:27:02.532Z', $object->getUpdatedAt());
        self::assertInstanceOf(TranslationDTOCollection::class, $object->getTranslations());
    }
}
