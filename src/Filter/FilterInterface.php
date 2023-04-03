<?php

declare(strict_types=1);

namespace SeraPHP\Filter;

interface FilterInterface
{
    public function getAsHttpQuery(): string;
}
