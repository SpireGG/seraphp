<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\LobbyEventDTO;

final class LobbyEventDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'timestamp' => '1234567890000',
            'eventType' => 'PracticeGameCreatedEvent',
            'summonerId' => '3',
        ];
        $object = LobbyEventDTO::createFromArray($data);
        self::assertSame('1234567890000', $object->getTimestamp());
        self::assertSame('PracticeGameCreatedEvent', $object->getEventType());
        self::assertSame('3', $object->getSummonerId());
    }
}
