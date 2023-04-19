<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MatchDTO implements DTOInterface
{
    public function __construct(
        private readonly MetadataDTO $metadata,
        private readonly InfoDTO $info,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            MetadataDTO::createFromArray($data['metadata']),
            InfoDTO::createFromArray($data['info'])
        );
    }

    public function getMetadata(): MetadataDTO
    {
        return $this->metadata;
    }

    public function getInfo(): InfoDTO
    {
        return $this->info;
    }
}
