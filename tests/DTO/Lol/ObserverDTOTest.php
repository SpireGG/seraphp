<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\ObserverDTO;

final class ObserverDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'encryptionKey' => 'CY5UAf0ML7+VfXWAivAYV4ZTfWOXPzA1',
        ];
        $object = ObserverDTO::createFromArray($data);
        self::assertSame('CY5UAf0ML7+VfXWAivAYV4ZTfWOXPzA1', $object->getEncryptionKey());
    }
}
