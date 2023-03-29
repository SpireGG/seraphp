<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\Definitions;

abstract class ApiObjectIterable extends ApiObject implements \Iterator
{
    protected array|object $_iterable = [];

    public function rewind(): void
    {
        reset($this->_iterable);
    }

    public function current(): mixed
    {
        return current($this->_iterable);
    }

    public function key(): mixed
    {
        return key($this->_iterable);
    }

    public function next(): void
    {
        next($this->_iterable);
    }

    public function valid(): bool
    {
        return null !== $this->key() && false !== $this->key();
    }
}
