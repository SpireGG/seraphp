<?php

declare(strict_types=1);

namespace SeraPHPhine\Tests\DTO;

use PHPUnit\Framework\TestCase;
use SeraPHPhine\DTO\ObserverDTO;

final class ObserverDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'encryptionKey' => 'CY5UAf0ML7+VfXWAivAYV4ZTfWOXPzA1',
        ];
        $object = ObserverDTO::createFromArray($data);
        self::assertSame('CY5UAf0ML7+VfXWAivAYV4ZTfWOXPzA1', $object->getEncryptionKey());
    }
}
