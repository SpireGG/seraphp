<?php

namespace SeraPHPhine\API\Cache;

class CallCacheStorage
{
    protected array $cache = [];

    public function clear(): bool
    {
        $this->cache = [];

        return true;
    }

    public function isCached(string $hash): bool
    {
        if (!isset($this->cache[$hash])) {
            return false;
        }

        if ($this->cache[$hash]['expires'] < time()) {
            unset($this->cache[$hash]);

            return false;
        }

        return true;
    }

    public function load(string $hash): mixed
    {
        return $this->isCached($hash)
            ? $this->cache[$hash]['data']
            : false;
    }

    public function save(string $hash, $data, int $length): void
    {
        $this->cache[$hash] = [
            'expires' => time() + $length,
            'data' => $data,
        ];
    }
}
