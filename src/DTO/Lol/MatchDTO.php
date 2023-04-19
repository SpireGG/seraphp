<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MatchDTO implements DTOInterface
{
    public function __construct(
        MetadataDTO $metadata,
        InfoDto $info,
    ) {
    }

    public static function createFromArray(array $data): DTOInterface
    {
        return new self(
            MetadataDTO::createFromArray($data['metadata']),
            InfoDto::createFromArray($data['info'])
        );
    }
}
