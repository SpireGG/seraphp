<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObject;

/**
 *   Class SummonerDto.
 *
 * Used in:
 *   summoner (v4)
 *     - @see SeraPHPhine::getByAccountId
 *     - @see https://developer.riotgames.com/apis#summoner-v4/GET_getByAccountId
 *     - @see SeraPHPhine::getBySummonerName
 *     - @see https://developer.riotgames.com/apis#summoner-v4/GET_getBySummonerName
 *     - @see SeraPHPhine::getByAccessToken
 *     - @see https://developer.riotgames.com/apis#summoner-v4/GET_getByAccessToken
 *     - @see SeraPHPhine::getBySummonerId
 *     - @see https://developer.riotgames.com/apis#summoner-v4/GET_getBySummonerId
 *     - @see SeraPHPhine::getByPUUID
 *     - @see https://developer.riotgames.com/apis#summoner-v4/GET_getByPUUID
 */
class SummonerDto extends ApiObject
{
    /**
     * Encrypted account ID. Max length 56 characters.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public string $accountId;

    /**
     * ID of the summoner icon associated with the summoner.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public int $profileIconId;

    /**
     * Date summoner was last modified specified as epoch milliseconds. The
     * following events will update this timestamp: summoner name change,
     * summoner level change, or profile icon change.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public int $revisionDate;

    /**
     * Summoner name.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public string $name;

    /**
     * Encrypted summoner ID. Max length 63 characters.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public string $id;

    /**
     * Encrypted PUUID. Exact length of 78 characters.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public string $puuid;

    /**
     * Summoner level associated with the summoner.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getByAccountId
     *   - @see SeraPHPhine::getBySummonerName
     *   - @see SeraPHPhine::getByAccessToken
     *   - @see SeraPHPhine::getBySummonerId
     *   - @see SeraPHPhine::getByPUUID
     */
    public int $summonerLevel;
}
