<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol\Deprecated;

use SeraPHP\DTO\DTOInterface;

final class PerksDTO implements DTOInterface
{
    /** @var array<int> */
    private array $perkIds;

    private int $perkStyle;

    private int $perkSubStyle;

    /**
     * @param array<int> $perkIds
     */
    public function __construct(array $perkIds, int $perkStyle, int $perkSubStyle)
    {
        $this->perkIds = $perkIds;
        $this->perkStyle = $perkStyle;
        $this->perkSubStyle = $perkSubStyle;
    }

    /**
     * @return array<int>
     */
    public function getPerkIds(): array
    {
        return $this->perkIds;
    }

    public function getPerkStyle(): int
    {
        return $this->perkStyle;
    }

    public function getPerkSubStyle(): int
    {
        return $this->perkSubStyle;
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['perkIds'],
            $data['perkStyle'],
            $data['perkSubStyle'],
        );
    }
}
