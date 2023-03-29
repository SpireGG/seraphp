<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class Participant.
 *
 * Used in:
 *   spectator (v4)
 *     - @see SeraPHPhine::getFeaturedGames
 *     - @see https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *
 * @seeable getStaticChampion($championId)
 */
class Participant extends ApiObjectLinkable
{
    /**
     * Flag indicating whether or not this participant is a bot.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var bool
     */
    public $bot;

    /**
     * The ID of the second summoner spell used by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var int
     */
    public $spell2Id;

    /**
     * The ID of the profile icon used by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var int
     */
    public $profileIconId;

    /**
     * The summoner name of this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var string
     */
    public $summonerName;

    /**
     * The ID of the champion played by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var int
     */
    public $championId;

    /**
     * The team ID of this participant, indicating the participant's team.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var int
     */
    public $teamId;

    /**
     * The ID of the first summoner spell used by this participant.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getFeaturedGames
     *
     * @var int
     */
    public $spell1Id;
}
