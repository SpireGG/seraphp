<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class ChampionMasteryDto.
 *
 * Used in:
 *   champion-mastery (v4)
 *     - @see SeraPHPhine::getChampionMastery
 *     - @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMastery
 *     - @see SeraPHPhine::getAllChampionMasteries
 *     - @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getAllChampionMasteries
 *
 * @seeable getStaticChampion($championId)
 */
class ChampionMasteryDto extends ApiObjectLinkable
{
    /**
     * Number of points needed to achieve next level. Zero if player reached
     * maximum champion level for this champion.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $championPointsUntilNextLevel;

    /**
     * Is chest granted for this champion or not in current season.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public bool $chestGranted;

    /**
     * Champion ID for this entry.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $championId;

    /**
     * Last time this champion was played by this player - in Unix
     * milliseconds time format.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $lastPlayTime;

    /**
     * Champion level for specified player and champion combination.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $championLevel;

    /**
     * Summoner ID for this entry. (Encrypted).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public string $summonerId;

    /**
     * Total number of champion points for this player and champion
     * combination - they are used to determine championLevel.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $championPoints;

    /**
     * Number of points earned since current level has been achieved.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $championPointsSinceLastLevel;

    /**
     * The token earned for this champion at the current championLevel. When
     * the championLevel is advanced the tokensEarned resets to 0.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getChampionMastery
     *   - @see SeraPHPhine::getAllChampionMasteries
     */
    public int $tokensEarned;
}
