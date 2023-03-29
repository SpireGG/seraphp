<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\StaticData;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class StaticRealmDto
 * This object contains realm data.
 */
class StaticRealmDto extends ApiObject
{
    /**
     *   Legacy script mode for IE6 or older.
     */
    public string $lg;

    /**
     *   Latest changed version of Dragon Magic.
     */
    public string $dd;

    /**
     *   Default language for this realm.
     */
    public string $l;

    /**
     *   Latest changed version for each data type listed.
     *
     * @var string[]
     */
    public array $n;

    /**
     *   Special behavior number identifying the largest profile icon ID that can
     * be used under 500. Any profile icon that is requested between this number and
     * 500 should be mapped to 0.
     */
    public int $profileiconmax;

    /**
     *   Additional API data drawn from other sources that may be related to Data
     * Dragon functionality.
     */
    public string $store;

    /**
     *   Current version of this file for this realm.
     */
    public string $v;

    /**
     *   The base CDN URL.
     */
    public string $cdn;

    /**
     *   Latest changed version of Dragon Magic's CSS file.
     */
    public string $css;
}
