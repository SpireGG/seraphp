<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\ContentDTO;

final class ContentDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'locale' => 'en_US',
            'content' => 'Summoner’s Rift Co-op vs AI - Champion Disabled',
        ];
        $object = ContentDTO::createFromArray($data);
        self::assertSame('en_US', $object->getLocale());
        self::assertSame('Summoner’s Rift Co-op vs AI - Champion Disabled', $object->getContent());
    }
}
