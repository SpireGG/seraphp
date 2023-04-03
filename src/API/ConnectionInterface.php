<?php

declare(strict_types=1);

namespace SeraPHP\API;

interface ConnectionInterface
{
    public function get(string $region, string $path): ResponseDecoderInterface;

    public function post(string $region, string $path, array $data): ResponseDecoderInterface;

    public function put(string $region, string $path, array $data): ResponseDecoderInterface;
    public function setResource(string $resource): self;
}
