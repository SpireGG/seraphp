<?php

declare(strict_types=1);

namespace SeraPHP\Collection;

use Ramsey\Collection\AbstractCollection;
use SeraPHP\DTO\MessageDTO;

final class MessageDTOCollection extends AbstractCollection
{
    public function getType(): string
    {
        return MessageDTO::class;
    }

    /**
     * @param array<array<string, array|string>> $data
     *
     * @return MessageDTOCollection<MessageDTO>
     */
    public static function createFromArray(array $data): self
    {
        $collection = new self();
        foreach ($data as $item) {
            $collection->add(MessageDTO::createFromArray($item));
        }

        return $collection;
    }
}
