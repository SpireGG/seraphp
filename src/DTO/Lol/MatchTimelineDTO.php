<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class MatchTimelineDTO implements DTOInterface
{
    public function __construct(
        private readonly MetadataDTO $metadata,
        private readonly MatchTimelineInfoDTO $info,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            MetadataDTO::createFromArray($data['metadata']),
            MatchTimelineInfoDTO::createFromArray($data['info'])
        );
    }

    public function getMetadata(): MetadataDTO
    {
        return $this->metadata;
    }

    public function getInfo(): MatchTimelineInfoDTO
    {
        return $this->info;
    }
}
