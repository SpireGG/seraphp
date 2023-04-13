<?php

namespace SeraPHP\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static self HEADER_API_KEY()
 * @method static self HEADER_RATELIMIT_TYPE()
 * @method static self HEADER_METHOD_RATELIMIT()
 * @method static self HEADER_METHOD_RATELIMIT_COUNT()
 * @method static self HEADER_APP_RATELIMIT()
 * @method static self HEADER_APP_RATELIMIT_COUNT()
 * @method static self HEADER_DEPRECATION()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
final class RiotHeadersEnum extends Enum
{
    private const HEADER_API_KEY = 'X-Riot-Token';
    private const HEADER_RATELIMIT_TYPE = 'X-Rate-Limit-Type';
    private const HEADER_METHOD_RATELIMIT = 'X-Method-Rate-Limit';
    private const HEADER_METHOD_RATELIMIT_COUNT = 'X-Method-Rate-Limit-Count';
    private const HEADER_APP_RATELIMIT = 'X-App-Rate-Limit';
    private const HEADER_APP_RATELIMIT_COUNT = 'X-App-Rate-Limit-Count';
    private const HEADER_DEPRECATION = 'X-Riot-Deprecated';
}
