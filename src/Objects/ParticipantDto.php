<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects;

use SeraPHPhine\Objects\Definitions\ApiObjectLinkable;

/**
 *   Class ParticipantDto.
 *
 * Used in:
 *   match (v4)
 *     - @see SeraPHPhine::getMatchByTournamentCode
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatchByTournamentCode
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v4/GET_getMatch
 *   match (v5)
 *     - @see SeraPHPhine::getMatch
 *     - @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
 *
 * @seeable getStaticChampion($championId)
 */
class ParticipantDto extends ApiObjectLinkable
{
    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *   - @see SeraPHPhine::getMatch.
     */
    public int $participantId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *   - @see SeraPHPhine::getMatch.
     */
    public int $championId;

    /**
     * List of legacy Rune information. Not included for matches played with
     * Runes Reforged.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var RuneDto[]
     */
    public array $runes;

    /**
     * Participant statistics.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public ParticipantStatsDto $stats;

    /**
     * 100 for blue side. 200 for red side.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *   - @see SeraPHPhine::getMatch
     */
    public int $teamId;

    /**
     * Participant timeline data.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public ParticipantTimelineDto $timeline;

    /**
     * First Summoner Spell id.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $spell1Id;

    /**
     * Second Summoner Spell id.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public int $spell2Id;

    /**
     * Highest ranked tier achieved for the previous season in a specific
     * subset of queueIds, if any, otherwise null. Used to display border in
     * game loading screen. Please refer to the Ranked Info documentation.
     * (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER,
     * BRONZE, UNRANKED).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     */
    public string $highestAchievedSeasonTier;

    /**
     * List of legacy Mastery information. Not included for matches played
     * with Runes Reforged.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatchByTournamentCode
     *   - @see SeraPHPhine::getMatch
     *
     * @var MasteryDto[]
     */
    public array $masteries;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $assists;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $baronKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $bountyLevel;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $champExperience;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $champLevel;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $championName;

    /**
     * This field is currently only utilized for Kayn's transformations.
     * (Legal values: 0 - None, 1 - Slayer, 2 - Assassin).
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public int $championTransform;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $consumablesPurchased;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $damageDealtToBuildings;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $damageDealtToObjectives;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $damageDealtToTurrets;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $damageSelfMitigated;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $deaths;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $detectorWardsPlaced;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $doubleKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $dragonKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $firstBloodAssist;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $firstBloodKill;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $firstTowerAssist;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $firstTowerKill;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $gameEndedInEarlySurrender;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $gameEndedInSurrender;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $goldEarned;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $goldSpent;

    /**
     * Both individualPosition and teamPosition are computed by the game
     * server and are different versions of the most likely position played by
     * a player. The individualPosition is the best guess for which position
     * the player actually played in isolation of anything else. The
     * teamPosition is the best guess for which position the player actually
     * played if we add the constraint that each team must have one top
     * player, one jungle, one middle, etc. Generally the recommendation is to
     * use the teamPosition field over the individualPosition field.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $individualPosition;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $inhibitorKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $inhibitorTakedowns;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $inhibitorsLost;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item0;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item1;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item2;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item3;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item4;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item5;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $item6;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $itemsPurchased;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $killingSprees;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $kills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $lane;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $largestCriticalStrike;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $largestKillingSpree;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $largestMultiKill;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $longestTimeSpentLiving;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $magicDamageDealt;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $magicDamageDealtToChampions;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $magicDamageTaken;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $neutralMinionsKilled;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $nexusKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $nexusTakedowns;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $nexusLost;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $objectivesStolen;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $objectivesStolenAssists;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $pentaKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public PerksDto $perks;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $physicalDamageDealt;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $physicalDamageDealtToChampions;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $physicalDamageTaken;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $profileIcon;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $puuid;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $quadraKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $riotIdName;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $riotIdTagline;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $role;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $sightWardsBoughtInGame;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $spell1Casts;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $spell2Casts;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $spell3Casts;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $spell4Casts;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $summoner1Casts;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $summoner1Id;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $summoner2Casts;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $summoner2Id;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $summonerId;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $summonerLevel;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public string $summonerName;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $teamEarlySurrendered;

    /**
     * Both individualPosition and teamPosition are computed by the game
     * server and are different versions of the most likely position played by
     * a player. The individualPosition is the best guess for which position
     * the player actually played in isolation of anything else. The
     * teamPosition is the best guess for which position the player actually
     * played if we add the constraint that each team must have one top
     * player, one jungle, one middle, etc. Generally the recommendation is to
     * use the teamPosition field over the individualPosition field.
     *
     * Available when received from:
     *   - @see SeraPHPhine::getMatch
     */
    public string $teamPosition;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $timeCCingOthers;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $timePlayed;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalDamageDealt;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalDamageDealtToChampions;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalDamageShieldedOnTeammates;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalDamageTaken;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalHeal;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalHealsOnTeammates;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalMinionsKilled;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalTimeCCDealt;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalTimeSpentDead;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $totalUnitsHealed;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $tripleKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $trueDamageDealt;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $trueDamageDealtToChampions;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $trueDamageTaken;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $turretKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $turretTakedowns;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $turretsLost;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $unrealKills;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $visionScore;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $visionWardsBoughtInGame;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $wardsKilled;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public int $wardsPlaced;

    /**
     * Available when received from:
     *   - @see SeraPHPhine::getMatch.
     */
    public bool $win;
}
