<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\TranslationDTO;

final class TranslationDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return TranslationDTO::class;
    }

    /**
     * @param array<array<string, string>> $data
     *
     * @return TranslationDTOCollection<TranslationDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(TranslationDTO::createFromArray($item));
        }

        return $collection;
    }
}
