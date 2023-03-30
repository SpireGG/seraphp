<?php

namespace SeraPHPhine\API\Cache;

interface ICallCacheControl
{
    public function isCallCached(string $hash): bool;

    public function loadCallData(string $hash): mixed;

    public function saveCallData(string $hash, $data, int $length): bool;

    public function clear(): bool;
}
