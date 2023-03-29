<?php

declare(strict_types=1);

namespace SeraPHPhine;

use SeraPHPhine\Configuration\Configuration;

class SeraPHPhine
{
    private Configuration $configuration;

    public function __construct(
        array $config
    ) {
        $this->configuration = new Configuration($config);
        $this->configuration->validate();
    }
}
