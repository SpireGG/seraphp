<?php

namespace SeraPHPhine\Objects\Definitions;

interface IApiObject
{
    public function __construct(array $data);

    public function getData(): array;
}
