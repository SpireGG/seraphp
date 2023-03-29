<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class ProviderRegistrationParameters.
 *
 * Used in:
 *   tournament-stub (v4)
 *     - @see SeraPHPhine::registerProviderData
 *     - @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_registerProviderData
 *   tournament (v4)
 *     - @see SeraPHPhine::registerProviderData
 *     - @see https://developer.riotgames.com/apis#tournament-v4/POST_registerProviderData
 */
class ProviderRegistrationParameters extends ApiObject
{
    /**
     * The region in which the provider will be running tournaments. (Legal
     * values: BR, EUNE, EUW, JP, LAN, LAS, NA, OCE, PBE, RU, TR).
     *
     * Available when received from:
     *   - @see SeraPHPhine::registerProviderData
     *   - @see SeraPHPhine::registerProviderData
     */
    public string $region;

    /**
     * The provider's callback URL to which tournament game results in this
     * region should be posted. The URL must be well-formed, use the http or
     * https protocol, and use the default port for the protocol (http URLs
     * must use port 80, https URLs must use port 443).
     *
     * Available when received from:
     *   - @see SeraPHPhine::registerProviderData
     *   - @see SeraPHPhine::registerProviderData
     */
    public string $url;
}
