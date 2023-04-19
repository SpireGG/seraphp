<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Tft;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Tft\CompanionDTO;

final class CompanionDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'content_ID' => '1234ad9f-4665-4372-8f3e-6c878adb8918',
            'skin_ID' => 1,
            'species' => 'PetTFTAvatar',
        ];
        $object = CompanionDTO::createFromArray($data);
        self::assertSame(
            '1234ad9f-4665-4372-8f3e-6c878adb8918',
            $object->getContentId(),
        );
        self::assertSame(1, $object->getSkinId());
        self::assertSame('PetTFTAvatar', $object->getSpecies());
    }
}
