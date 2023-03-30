<?php

declare(strict_types=1);
use App\SeraPHPhine;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new SeraPHPhine($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
