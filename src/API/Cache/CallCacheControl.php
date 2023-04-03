<?php

namespace SeraPHP\API\Cache;

/**
 *   Class CallCacheControl.
 */
class CallCacheControl implements ICallCacheControl
{
    protected CallCacheStorage $storage;

    public function __construct()
    {
        $this->storage = new CallCacheStorage();
    }

    public function clear(): bool
    {
        return $this->storage->clear();
    }

    public function isCallCached(string $hash): bool
    {
        return $this->storage->isCached($hash);
    }

    public function loadCallData(string $hash): mixed
    {
        return $this->storage->load($hash);
    }

    public function saveCallData(string $hash, $data, int $length): bool
    {
        $this->storage->save($hash, $data, $length);

        return true;
    }
}
