<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHP\Collection\LobbyEventDTOCollection;
use SeraPHP\DTO\LobbyEventDTOWrapperDTO;

final class LobbyEventDTOWrapperDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'eventList' => [],
        ];
        $object = LobbyEventDTOWrapperDTO::createFromArray($data);
        self::assertInstanceOf(LobbyEventDTOCollection::class, $object->getEventList());
    }
}
