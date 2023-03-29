<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class CurrentGameParticipant.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getCurrentGameInfoBySummoner
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 *
 * @seeable getStaticChampion($championId)
 */
class CurrentGameParticipant extends ApiObjectLinkable
{
    /**
     * The ID of the champion played by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $championId;

    /**
     * Perks/Runes Reforged Information.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public Perks $perks;

    /**
     * The ID of the profile icon used by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $profileIconId;

    /**
     * Flag indicating whether or not this participant is a bot.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public bool $bot;

    /**
     * The team ID of this participant, indicating the participant's team.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $teamId;

    /**
     * The summoner name of this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $summonerName;

    /**
     * The encrypted summoner ID of this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public string $summonerId;

    /**
     * The ID of the first summoner spell used by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $spell1Id;

    /**
     * The ID of the second summoner spell used by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     */
    public int $spell2Id;

    /**
     * List of Game Customizations.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getCurrentGameInfoBySummoner
     *
     * @var GameCustomizationObject[]
     */
    public array $gameCustomizationObjects;
}
