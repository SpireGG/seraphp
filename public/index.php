<?php

declare(strict_types=1);
use App\SeraPHP;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new SeraPHP($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
