<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ObjectivesDTO implements DTOInterface
{
    public function __construct(
        public ObjectiveDTO $baron,
        public ObjectiveDTO $champion,
        public ObjectiveDTO $dragon,
        public ObjectiveDTO $inhibitor,
        public ObjectiveDTO $riftHerald,
        public ObjectiveDTO $tower,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            ObjectiveDTO::createFromArray($data['baron']),
            ObjectiveDTO::createFromArray($data['champion']),
            ObjectiveDTO::createFromArray($data['dragon']),
            ObjectiveDTO::createFromArray($data['inhibitor']),
            ObjectiveDTO::createFromArray($data['riftHerald']),
            ObjectiveDTO::createFromArray($data['tower']),
        );
    }
}
