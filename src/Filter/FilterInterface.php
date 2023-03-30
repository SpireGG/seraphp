<?php

declare(strict_types=1);

namespace SeraPHPhine\Filter;

interface FilterInterface
{
    public function getAsHttpQuery(): string;
}
