<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\Collection\LobbyEventDTOCollection;
use SeraPHPhine\DTO\LobbyEventDTOWrapperDTO;

final class LobbyEventDTOWrapperDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'eventList' => [],
        ];
        $object = LobbyEventDTOWrapperDTO::createFromArray($data);
        self::assertInstanceOf(LobbyEventDTOCollection::class, $object->getEventList());
    }
}
