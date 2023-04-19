<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

final class ParticipantDTO implements DTOInterface
{
    public function __construct(
        private readonly int $allInPings,
        private readonly int $assistMePings,
        private readonly int $assists,
        private readonly int $baitPings,
        private readonly int $baronKills,
        private readonly int $basicPings,
        private readonly int $bountyLevel,
        private readonly ChallengesDTO $challenges,
        private readonly int $champExperience,
        private readonly int $champLevel,
        /** Prior to patch 11.4, on Feb 18th, 2021, this field returned invalid championIds. We recommend determining the champion based on the championName field for matches played prior to patch 11.4. */
        private readonly int $championId,
        private readonly string $championName,
        /** This field is currently only utilized for Kayn's transformations. (Legal values: 0 - None, 1 - Slayer, 2 - Assassin) */
        private readonly int $championTransform,
        private readonly int $commandPings,
        private readonly int $consumablesPurchased,
        private readonly int $damageDealtToBuildings,
        private readonly int $damageDealtToObjectives,
        private readonly int $damageDealtToTurrets,
        private readonly int $damageSelfMitigated,
        private readonly int $dangerPings,
        private readonly int $deaths,
        private readonly int $detectorWardsPlaced,
        private readonly int $doubleKills,
        private readonly int $dragonKills,
        private readonly bool $eligibleForProgression,
        private readonly int $enemyMissingPings,
        private readonly int $enemyVisionPings,
        private readonly bool $firstBloodAssist,
        private readonly bool $firstBloodKill,
        private readonly bool $firstTowerAssist,
        private readonly bool $firstTowerKill,
        private readonly bool $gameEndedInEarlySurrender,
        private readonly bool $gameEndedInSurrender,
        private readonly int $getBackPings,
        private readonly int $goldEarned,
        private readonly int $goldSpent,
        private readonly int $holdPings,
        /** Both individualPosition and teamPosition are computed by the game server and are different versions of the most likely position played by a player. The individualPosition is the best guess for which position the player actually played in isolation of anything else. The teamPosition is the best guess for which position the player actually played if we add the constraint that each team must have one top player, one jungle, one middle, etc. Generally the recommendation is to use the teamPosition field over the individualPosition field. */
        private readonly string $individualPosition,
        private readonly int $inhibitorKills,
        private readonly int $inhibitorTakedowns,
        private readonly int $inhibitorsLost,
        private readonly int $item0,
        private readonly int $item1,
        private readonly int $item2,
        private readonly int $item3,
        private readonly int $item4,
        private readonly int $item5,
        private readonly int $item6,
        private readonly int $itemsPurchased,
        private readonly int $killingSprees,
        private readonly int $kills,
        private readonly string $lane,
        private readonly int $largestCriticalStrike,
        private readonly int $largestKillingSpree,
        private readonly int $largestMultiKill,
        private readonly int $longestTimeSpentLiving,
        private readonly int $magicDamageDealt,
        private readonly int $magicDamageDealtToChampions,
        private readonly int $magicDamageTaken,
        private readonly int $needVisionPings,
        private readonly int $neutralMinionsKilled,
        private readonly int $nexusKills,
        private readonly int $nexusTakedowns,
        private readonly int $nexusLost,
        private readonly int $objectivesStolen,
        private readonly int $objectivesStolenAssists,
        private readonly int $onMyWayPings,
        private readonly int $participantId,
        private readonly int $pentaKills,
        private readonly PerksDTO $perks,
        private readonly int $physicalDamageDealt,
        private readonly int $physicalDamageDealtToChampions,
        private readonly int $physicalDamageTaken,
        private readonly int $profileIcon,
        private readonly int $pushPings,
        private readonly string $puuid,
        private readonly int $quadraKills,
        private readonly string $riotIdName,
        private readonly string $riotIdTagline,
        private readonly string $role,
        private readonly int $sightWardsBoughtInGame,
        private readonly int $spell1Casts,
        private readonly int $spell2Casts,
        private readonly int $spell3Casts,
        private readonly int $spell4Casts,
        private readonly int $summoner1Casts,
        private readonly int $summoner1Id,
        private readonly int $summoner2Casts,
        private readonly int $summoner2Id,
        private readonly string $summonerId,
        private readonly int $summonerLevel,
        private readonly string $summonerName,
        private readonly bool $teamEarlySurrendered,
        private readonly int $teamId,
        /** Both individualPosition and teamPosition are computed by the game server and are different versions of the most likely position played by a player. The individualPosition is the best guess for which position the player actually played in isolation of anything else. The teamPosition is the best guess for which position the player actually played if we add the constraint that each team must have one top player, one jungle, one middle, etc. Generally the recommendation is to use the teamPosition field over the individualPosition field. */
        private readonly string $teamPosition,
        private readonly int $timeCCingOthers,
        private readonly int $timePlayed,
        private readonly int $totalDamageDealt,
        private readonly int $totalDamageDealtToChampions,
        private readonly int $totalDamageShieldedOnTeammates,
        private readonly int $totalDamageTaken,
        private readonly int $totalHeal,
        private readonly int $totalHealsOnTeammates,
        private readonly int $totalMinionsKilled,
        private readonly int $totalTimeCCDealt,
        private readonly int $totalTimeSpentDead,
        private readonly int $totalUnitsHealed,
        private readonly int $tripleKills,
        private readonly int $trueDamageDealt,
        private readonly int $trueDamageDealtToChampions,
        private readonly int $trueDamageTaken,
        private readonly int $turretKills,
        private readonly int $turretTakedowns,
        private readonly int $turretsLost,
        private readonly int $unrealKills,
        private readonly int $visionClearedPings,
        private readonly int $visionScore,
        private readonly int $visionWardsBoughtInGame,
        private readonly int $wardsKilled,
        private readonly int $wardsPlaced,
        private readonly bool $win
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['allInPings'],
            $data['assistMePings'],
            $data['assists'],
            $data['baitPings'],
            $data['baronKills'],
            $data['basicPings'],
            $data['bountyLevel'],
            ChallengesDTO::createFromArray($data['challenges']),
            $data['champExperience'],
            $data['champLevel'],
            $data['championId'],
            $data['championName'],
            $data['championTransform'],
            $data['commandPings'],
            $data['consumablesPurchased'],
            $data['damageDealtToBuildings'],
            $data['damageDealtToObjectives'],
            $data['damageDealtToTurrets'],
            $data['damageSelfMitigated'],
            $data['dangerPings'],
            $data['deaths'],
            $data['detectorWardsPlaced'],
            $data['doubleKills'],
            $data['dragonKills'],
            $data['eligibleForProgression'],
            $data['enemyMissingPings'],
            $data['enemyVisionPings'],
            $data['firstBloodAssist'],
            $data['firstBloodKill'],
            $data['firstTowerAssist'],
            $data['firstTowerKill'],
            $data['gameEndedInEarlySurrender'],
            $data['gameEndedInSurrender'],
            $data['getBackPings'],
            $data['goldEarned'],
            $data['goldSpent'],
            $data['holdPings'],
            $data['individualPosition'],
            $data['inhibitorKills'],
            $data['inhibitorTakedowns'],
            $data['inhibitorsLost'],
            $data['item0'],
            $data['item1'],
            $data['item2'],
            $data['item3'],
            $data['item4'],
            $data['item5'],
            $data['item6'],
            $data['itemsPurchased'],
            $data['killingSprees'],
            $data['kills'],
            $data['lane'],
            $data['largestCriticalStrike'],
            $data['largestKillingSpree'],
            $data['largestMultiKill'],
            $data['longestTimeSpentLiving'],
            $data['magicDamageDealt'],
            $data['magicDamageDealtToChampions'],
            $data['magicDamageTaken'],
            $data['needVisionPings'],
            $data['neutralMinionsKilled'],
            $data['nexusKills'],
            $data['nexusTakedowns'],
            $data['nexusLost'],
            $data['objectivesStolen'],
            $data['objectivesStolenAssists'],
            $data['onMyWayPings'],
            $data['participantId'],
            $data['pentaKills'],
            PerksDTO::createFromArray($data['perks']),
            $data['physicalDamageDealt'],
            $data['physicalDamageDealtToChampions'],
            $data['physicalDamageTaken'],
            $data['profileIcon'],
            $data['pushPings'],
            $data['puuid'],
            $data['quadraKills'],
            $data['riotIdName'],
            $data['riotIdTagline'],
            $data['role'],
            $data['sightWardsBoughtInGame'],
            $data['spell1Casts'],
            $data['spell2Casts'],
            $data['spell3Casts'],
            $data['spell4Casts'],
            $data['summoner1Casts'],
            $data['summoner1Id'],
            $data['summoner2Casts'],
            $data['summoner2Id'],
            $data['summonerId'],
            $data['summonerLevel'],
            $data['summonerName'],
            $data['teamEarlySurrendered'],
            $data['teamId'],
            $data['teamPosition'],
            $data['timeCCingOthers'],
            $data['timePlayed'],
            $data['totalDamageDealt'],
            $data['totalDamageDealtToChampions'],
            $data['totalDamageShieldedOnTeammates'],
            $data['totalDamageTaken'],
            $data['totalHeal'],
            $data['totalHealsOnTeammates'],
            $data['totalMinionsKilled'],
            $data['totalTimeCCDealt'],
            $data['totalTimeSpentDead'],
            $data['totalUnitsHealed'],
            $data['tripleKills'],
            $data['trueDamageDealt'],
            $data['trueDamageDealtToChampions'],
            $data['trueDamageTaken'],
            $data['turretKills'],
            $data['turretTakedowns'],
            $data['turretsLost'],
            $data['unrealKills'],
            $data['visionClearedPings'],
            $data['visionScore'],
            $data['visionWardsBoughtInGame'],
            $data['wardsKilled'],
            $data['wardsPlaced'],
            $data['win'],
        );
    }

    public function getAllInPings(): int
    {
        return $this->allInPings;
    }

    public function getAssistMePings(): int
    {
        return $this->assistMePings;
    }

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function getBaitPings(): int
    {
        return $this->baitPings;
    }

    public function getBaronKills(): int
    {
        return $this->baronKills;
    }

    public function getBasicPings(): int
    {
        return $this->basicPings;
    }

    public function getBountyLevel(): int
    {
        return $this->bountyLevel;
    }

    public function getChallenges(): ChallengesDTO
    {
        return $this->challenges;
    }

    public function getChampExperience(): int
    {
        return $this->champExperience;
    }

    public function getChampLevel(): int
    {
        return $this->champLevel;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function getChampionName(): string
    {
        return $this->championName;
    }

    public function getChampionTransform(): int
    {
        return $this->championTransform;
    }

    public function getCommandPings(): int
    {
        return $this->commandPings;
    }

    public function getConsumablesPurchased(): int
    {
        return $this->consumablesPurchased;
    }

    public function getDamageDealtToBuildings(): int
    {
        return $this->damageDealtToBuildings;
    }

    public function getDamageDealtToObjectives(): int
    {
        return $this->damageDealtToObjectives;
    }

    public function getDamageDealtToTurrets(): int
    {
        return $this->damageDealtToTurrets;
    }

    public function getDamageSelfMitigated(): int
    {
        return $this->damageSelfMitigated;
    }

    public function getDangerPings(): int
    {
        return $this->dangerPings;
    }

    public function getDeaths(): int
    {
        return $this->deaths;
    }

    public function getDetectorWardsPlaced(): int
    {
        return $this->detectorWardsPlaced;
    }

    public function getDoubleKills(): int
    {
        return $this->doubleKills;
    }

    public function getDragonKills(): int
    {
        return $this->dragonKills;
    }

    public function isEligibleForProgression(): bool
    {
        return $this->eligibleForProgression;
    }

    public function getEnemyMissingPings(): int
    {
        return $this->enemyMissingPings;
    }

    public function getEnemyVisionPings(): int
    {
        return $this->enemyVisionPings;
    }

    public function isFirstBloodAssist(): bool
    {
        return $this->firstBloodAssist;
    }

    public function isFirstBloodKill(): bool
    {
        return $this->firstBloodKill;
    }

    public function isFirstTowerAssist(): bool
    {
        return $this->firstTowerAssist;
    }

    public function isFirstTowerKill(): bool
    {
        return $this->firstTowerKill;
    }

    public function isGameEndedInEarlySurrender(): bool
    {
        return $this->gameEndedInEarlySurrender;
    }

    public function isGameEndedInSurrender(): bool
    {
        return $this->gameEndedInSurrender;
    }

    public function getGetBackPings(): int
    {
        return $this->getBackPings;
    }

    public function getGoldEarned(): int
    {
        return $this->goldEarned;
    }

    public function getGoldSpent(): int
    {
        return $this->goldSpent;
    }

    public function getHoldPings(): int
    {
        return $this->holdPings;
    }

    public function getIndividualPosition(): string
    {
        return $this->individualPosition;
    }

    public function getInhibitorKills(): int
    {
        return $this->inhibitorKills;
    }

    public function getInhibitorTakedowns(): int
    {
        return $this->inhibitorTakedowns;
    }

    public function getInhibitorsLost(): int
    {
        return $this->inhibitorsLost;
    }

    public function getItem0(): int
    {
        return $this->item0;
    }

    public function getItem1(): int
    {
        return $this->item1;
    }

    public function getItem2(): int
    {
        return $this->item2;
    }

    public function getItem3(): int
    {
        return $this->item3;
    }

    public function getItem4(): int
    {
        return $this->item4;
    }

    public function getItem5(): int
    {
        return $this->item5;
    }

    public function getItem6(): int
    {
        return $this->item6;
    }

    public function getItemsPurchased(): int
    {
        return $this->itemsPurchased;
    }

    public function getKillingSprees(): int
    {
        return $this->killingSprees;
    }

    public function getKills(): int
    {
        return $this->kills;
    }

    public function getLane(): string
    {
        return $this->lane;
    }

    public function getLargestCriticalStrike(): int
    {
        return $this->largestCriticalStrike;
    }

    public function getLargestKillingSpree(): int
    {
        return $this->largestKillingSpree;
    }

    public function getLargestMultiKill(): int
    {
        return $this->largestMultiKill;
    }

    public function getLongestTimeSpentLiving(): int
    {
        return $this->longestTimeSpentLiving;
    }

    public function getMagicDamageDealt(): int
    {
        return $this->magicDamageDealt;
    }

    public function getMagicDamageDealtToChampions(): int
    {
        return $this->magicDamageDealtToChampions;
    }

    public function getMagicDamageTaken(): int
    {
        return $this->magicDamageTaken;
    }

    public function getNeedVisionPings(): int
    {
        return $this->needVisionPings;
    }

    public function getNeutralMinionsKilled(): int
    {
        return $this->neutralMinionsKilled;
    }

    public function getNexusKills(): int
    {
        return $this->nexusKills;
    }

    public function getNexusTakedowns(): int
    {
        return $this->nexusTakedowns;
    }

    public function getNexusLost(): int
    {
        return $this->nexusLost;
    }

    public function getObjectivesStolen(): int
    {
        return $this->objectivesStolen;
    }

    public function getObjectivesStolenAssists(): int
    {
        return $this->objectivesStolenAssists;
    }

    public function getOnMyWayPings(): int
    {
        return $this->onMyWayPings;
    }

    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    public function getPentaKills(): int
    {
        return $this->pentaKills;
    }

    public function getPerks(): PerksDTO
    {
        return $this->perks;
    }

    public function getPhysicalDamageDealt(): int
    {
        return $this->physicalDamageDealt;
    }

    public function getPhysicalDamageDealtToChampions(): int
    {
        return $this->physicalDamageDealtToChampions;
    }

    public function getPhysicalDamageTaken(): int
    {
        return $this->physicalDamageTaken;
    }

    public function getProfileIcon(): int
    {
        return $this->profileIcon;
    }

    public function getPushPings(): int
    {
        return $this->pushPings;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getQuadraKills(): int
    {
        return $this->quadraKills;
    }

    public function getRiotIdName(): string
    {
        return $this->riotIdName;
    }

    public function getRiotIdTagline(): string
    {
        return $this->riotIdTagline;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getSightWardsBoughtInGame(): int
    {
        return $this->sightWardsBoughtInGame;
    }

    public function getSpell1Casts(): int
    {
        return $this->spell1Casts;
    }

    public function getSpell2Casts(): int
    {
        return $this->spell2Casts;
    }

    public function getSpell3Casts(): int
    {
        return $this->spell3Casts;
    }

    public function getSpell4Casts(): int
    {
        return $this->spell4Casts;
    }

    public function getSummoner1Casts(): int
    {
        return $this->summoner1Casts;
    }

    public function getSummoner1Id(): int
    {
        return $this->summoner1Id;
    }

    public function getSummoner2Casts(): int
    {
        return $this->summoner2Casts;
    }

    public function getSummoner2Id(): int
    {
        return $this->summoner2Id;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function isTeamEarlySurrendered(): bool
    {
        return $this->teamEarlySurrendered;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function getTeamPosition(): string
    {
        return $this->teamPosition;
    }

    public function getTimeCCingOthers(): int
    {
        return $this->timeCCingOthers;
    }

    public function getTimePlayed(): int
    {
        return $this->timePlayed;
    }

    public function getTotalDamageDealt(): int
    {
        return $this->totalDamageDealt;
    }

    public function getTotalDamageDealtToChampions(): int
    {
        return $this->totalDamageDealtToChampions;
    }

    public function getTotalDamageShieldedOnTeammates(): int
    {
        return $this->totalDamageShieldedOnTeammates;
    }

    public function getTotalDamageTaken(): int
    {
        return $this->totalDamageTaken;
    }

    public function getTotalHeal(): int
    {
        return $this->totalHeal;
    }

    public function getTotalHealsOnTeammates(): int
    {
        return $this->totalHealsOnTeammates;
    }

    public function getTotalMinionsKilled(): int
    {
        return $this->totalMinionsKilled;
    }

    public function getTotalTimeCCDealt(): int
    {
        return $this->totalTimeCCDealt;
    }

    public function getTotalTimeSpentDead(): int
    {
        return $this->totalTimeSpentDead;
    }

    public function getTotalUnitsHealed(): int
    {
        return $this->totalUnitsHealed;
    }

    public function getTripleKills(): int
    {
        return $this->tripleKills;
    }

    public function getTrueDamageDealt(): int
    {
        return $this->trueDamageDealt;
    }

    public function getTrueDamageDealtToChampions(): int
    {
        return $this->trueDamageDealtToChampions;
    }

    public function getTrueDamageTaken(): int
    {
        return $this->trueDamageTaken;
    }

    public function getTurretKills(): int
    {
        return $this->turretKills;
    }

    public function getTurretTakedowns(): int
    {
        return $this->turretTakedowns;
    }

    public function getTurretsLost(): int
    {
        return $this->turretsLost;
    }

    public function getUnrealKills(): int
    {
        return $this->unrealKills;
    }

    public function getVisionClearedPings(): int
    {
        return $this->visionClearedPings;
    }

    public function getVisionScore(): int
    {
        return $this->visionScore;
    }

    public function getVisionWardsBoughtInGame(): int
    {
        return $this->visionWardsBoughtInGame;
    }

    public function getWardsKilled(): int
    {
        return $this->wardsKilled;
    }

    public function getWardsPlaced(): int
    {
        return $this->wardsPlaced;
    }

    public function isWin(): bool
    {
        return $this->win;
    }
}
