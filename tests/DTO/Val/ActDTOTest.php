<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Val;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Val\ActDTO;

final class ActDTOTest extends TestCase
{
    public function testCreateFromArrayCreatesProperObject(): void
    {
        $data = [
            'id' => '1234adb9-4dcb-6899-1306-3e9860661dd3',
            'name' => 'Closed Beta',
            'localizedNames' => null,
            'isActive' => false,
        ];
        $object = ActDTO::createFromArray($data);
        self::assertSame('1234adb9-4dcb-6899-1306-3e9860661dd3', $object->getId());
        self::assertSame('Closed Beta', $object->getName());
        self::assertNull($object->getLocalizedNames());
        self::assertFalse($object->isActive());
    }
}
