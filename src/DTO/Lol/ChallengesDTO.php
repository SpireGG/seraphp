<?php

namespace SeraPHP\DTO\Lol;

use SeraPHP\DTO\DTOInterface;

class ChallengesDTO implements DTOInterface
{
    public function __construct(
        private readonly int $AssistStreakCount,
        private readonly int $abilityUses,
        private readonly int $acesBefore15Minutes,
        private readonly int $alliedJungleMonsterKills,
        private readonly int $baronTakedowns,
        private readonly int $blastConeOppositeOpponentCount,
        private readonly int $bountyGold,
        private readonly int $buffsStolen,
        private readonly int $completeSupportQuestInTime,
        private readonly int $controlWardsPlaced,
        private readonly float $damagePerMinute,
        private readonly float $damageTakenOnTeamPercentage,
        private readonly int $dancedWithRiftHerald,
        private readonly int $deathsByEnemyChamps,
        private readonly int $dodgeSkillShotsSmallWindow,
        private readonly int $doubleAces,
        private readonly int $dragonTakedowns,
        private readonly int $earlyLaningPhaseGoldExpAdvantage,
        private readonly int $effectiveHealAndShielding,
        private readonly int $elderDragonKillsWithOpposingSoul,
        private readonly int $elderDragonMultikills,
        private readonly int $enemyChampionImmobilizations,
        private readonly int $enemyJungleMonsterKills,
        private readonly int $epicMonsterKillsNearEnemyJungler,
        private readonly int $epicMonsterKillsWithin30SecondsOfSpawn,
        private readonly int $epicMonsterSteals,
        private readonly int $epicMonsterStolenWithoutSmite,
        private readonly int $flawlessAces,
        private readonly int $fullTeamTakedown,
        private readonly float $gameLength,
        private readonly int $getTakedownsInAllLanesEarlyJungleAsLaner,
        private readonly float $goldPerMinute,
        private readonly int $hadOpenNexus,
        private readonly int $immobilizeAndKillWithAlly,
        private readonly int $initialBuffCount,
        private readonly int $initialCrabCount,
        private readonly int $jungleCsBefore10Minutes,
        private readonly int $junglerTakedownsNearDamagedEpicMonster,
        private readonly int $kTurretsDestroyedBeforePlatesFall,
        private readonly float $kda,
        private readonly int $killAfterHiddenWithAlly,
        private readonly float $killParticipation,
        private readonly int $killedChampTookFullTeamDamageSurvived,
        private readonly int $killsNearEnemyTurret,
        private readonly int $killsOnOtherLanesEarlyJungleAsLaner,
        private readonly int $killsOnRecentlyHealedByAramPack,
        private readonly int $killsUnderOwnTurret,
        private readonly int $killsWithHelpFromEpicMonster,
        private readonly int $knockEnemyIntoTeamAndKill,
        private readonly int $landSkillShotsEarlyGame,
        private readonly int $laneMinionsFirst10Minutes,
        private readonly int $laningPhaseGoldExpAdvantage,
        private readonly int $legendaryCount,
        private readonly int $lostAnInhibitor,
        private readonly int $maxCsAdvantageOnLaneOpponent,
        private readonly int $maxKillDeficit,
        private readonly int $maxLevelLeadLaneOpponent,
        private readonly int $moreEnemyJungleThanOpponent,
        private readonly int $multiKillOneSpell,
        private readonly int $multiTurretRiftHeraldCount,
        private readonly int $multikills,
        private readonly int $multikillsAfterAggressiveFlash,
        private readonly int $mythicItemUsed,
        private readonly int $outerTurretExecutesBefore10Minutes,
        private readonly int $outnumberedKills,
        private readonly int $outnumberedNexusKill,
        private readonly int $perfectDragonSoulsTaken,
        private readonly int $perfectGame,
        private readonly int $pickKillWithAlly,
        private readonly int $poroExplosions,
        private readonly int $quickCleanse,
        private readonly int $quickFirstTurret,
        private readonly int $quickSoloKills,
        private readonly int $riftHeraldTakedowns,
        private readonly int $saveAllyFromDeath,
        private readonly int $scuttleCrabKills,
        private readonly float $shortestTimeToAceFromFirstTakedown,
        private readonly int $skillshotsDodged,
        private readonly int $skillshotsHit,
        private readonly int $snowballsHit,
        private readonly int $soloBaronKills,
        private readonly int $soloKills,
        private readonly int $stealthWardsPlaced,
        private readonly int $survivedSingleDigitHpCount,
        private readonly int $survivedThreeImmobilizesInFight,
        private readonly int $takedownOnFirstTurret,
        private readonly int $takedowns,
        private readonly int $takedownsAfterGainingLevelAdvantage,
        private readonly int $takedownsBeforeJungleMinionSpawn,
        private readonly int $takedownsFirstXMinutes,
        private readonly int $takedownsInAlcove,
        private readonly int $takedownsInEnemyFountain,
        private readonly int $teamBaronKills,
        private readonly float $teamDamagePercentage,
        private readonly int $teamElderDragonKills,
        private readonly int $teamRiftHeraldKills,
        private readonly int $threeWardsOneSweeperCount,
        private readonly int $tookLargeDamageSurvived,
        private readonly int $turretPlatesTaken,
        private readonly int $turretTakedowns,
        private readonly int $turretsTakenWithRiftHerald,
        private readonly int $twentyMinionsIn3SecondsCount,
        private readonly int $unseenRecalls,
        private readonly int $visionScoreAdvantageLaneOpponent,
        private readonly int $visionScorePerMinute,
        private readonly int $wardTakedowns,
        private readonly int $wardTakedownsBefore20M,
        private readonly int $wardsGuarded,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['12AssistStreakCount'],
            $data['abilityUses'],
            $data['acesBefore15Minutes'],
            $data['alliedJungleMonsterKills'],
            $data['baronTakedowns'],
            $data['blastConeOppositeOpponentCount'],
            $data['bountyGold'],
            $data['buffsStolen'],
            $data['completeSupportQuestInTime'],
            $data['controlWardsPlaced'],
            $data['damagePerMinute'],
            $data['damageTakenOnTeamPercentage'],
            $data['dancedWithRiftHerald'],
            $data['deathsByEnemyChamps'],
            $data['dodgeSkillShotsSmallWindow'],
            $data['doubleAces'],
            $data['dragonTakedowns'],
            $data['earlyLaningPhaseGoldExpAdvantage'],
            $data['effectiveHealAndShielding'],
            $data['elderDragonKillsWithOpposingSoul'],
            $data['elderDragonMultikills'],
            $data['enemyChampionImmobilizations'],
            $data['enemyJungleMonsterKills'],
            $data['epicMonsterKillsNearEnemyJungler'],
            $data['epicMonsterKillsWithin30SecondsOfSpawn'],
            $data['epicMonsterSteals'],
            $data['epicMonsterStolenWithoutSmite'],
            $data['flawlessAces'],
            $data['fullTeamTakedown'],
            $data['gameLength'],
            $data['getTakedownsInAllLanesEarlyJungleAsLaner'],
            $data['goldPerMinute'],
            $data['hadOpenNexus'],
            $data['immobilizeAndKillWithAlly'],
            $data['initialBuffCount'],
            $data['initialCrabCount'],
            $data['jungleCsBefore10Minutes'],
            $data['junglerTakedownsNearDamagedEpicMonster'],
            $data['kTurretsDestroyedBeforePlatesFall'],
            $data['kda'],
            $data['killAfterHiddenWithAlly'],
            $data['killParticipation'],
            $data['killedChampTookFullTeamDamageSurvived'],
            $data['killsNearEnemyTurret'],
            $data['killsOnOtherLanesEarlyJungleAsLaner'],
            $data['killsOnRecentlyHealedByAramPack'],
            $data['killsUnderOwnTurret'],
            $data['killsWithHelpFromEpicMonster'],
            $data['knockEnemyIntoTeamAndKill'],
            $data['landSkillShotsEarlyGame'],
            $data['laneMinionsFirst10Minutes'],
            $data['laningPhaseGoldExpAdvantage'],
            $data['legendaryCount'],
            $data['lostAnInhibitor'],
            $data['maxCsAdvantageOnLaneOpponent'],
            $data['maxKillDeficit'],
            $data['maxLevelLeadLaneOpponent'],
            $data['moreEnemyJungleThanOpponent'],
            $data['multiKillOneSpell'],
            $data['multiTurretRiftHeraldCount'],
            $data['multikills'],
            $data['multikillsAfterAggressiveFlash'],
            $data['mythicItemUsed'],
            $data['outerTurretExecutesBefore10Minutes'],
            $data['outnumberedKills'],
            $data['outnumberedNexusKill'],
            $data['perfectDragonSoulsTaken'],
            $data['perfectGame'],
            $data['pickKillWithAlly'],
            $data['poroExplosions'],
            $data['quickCleanse'],
            $data['quickFirstTurret'],
            $data['quickSoloKills'],
            $data['riftHeraldTakedowns'],
            $data['saveAllyFromDeath'],
            $data['scuttleCrabKills'],
            $data['shortestTimeToAceFromFirstTakedown'],
            $data['skillshotsDodged'],
            $data['skillshotsHit'],
            $data['snowballsHit'],
            $data['soloBaronKills'],
            $data['soloKills'],
            $data['stealthWardsPlaced'],
            $data['survivedSingleDigitHpCount'],
            $data['survivedThreeImmobilizesInFight'],
            $data['takedownOnFirstTurret'],
            $data['takedowns'],
            $data['takedownsAfterGainingLevelAdvantage'],
            $data['takedownsBeforeJungleMinionSpawn'],
            $data['takedownsFirstXMinutes'],
            $data['takedownsInAlcove'],
            $data['takedownsInEnemyFountain'],
            $data['teamBaronKills'],
            $data['teamDamagePercentage'],
            $data['teamElderDragonKills'],
            $data['teamRiftHeraldKills'],
            $data['threeWardsOneSweeperCount'],
            $data['tookLargeDamageSurvived'],
            $data['turretPlatesTaken'],
            $data['turretTakedowns'],
            $data['turretsTakenWithRiftHerald'],
            $data['twentyMinionsIn3SecondsCount'],
            $data['unseenRecalls'],
            $data['visionScoreAdvantageLaneOpponent'],
            $data['visionScorePerMinute'],
            $data['wardTakedowns'],
            $data['wardTakedownsBefore20M'],
            $data['wardsGuarded']
        );
    }

    public function getAssistStreakCount(): int
    {
        return $this->AssistStreakCount;
    }

    public function getAbilityUses(): int
    {
        return $this->abilityUses;
    }

    public function getAcesBefore15Minutes(): int
    {
        return $this->acesBefore15Minutes;
    }

    public function getAlliedJungleMonsterKills(): int
    {
        return $this->alliedJungleMonsterKills;
    }

    public function getBaronTakedowns(): int
    {
        return $this->baronTakedowns;
    }

    public function getBlastConeOppositeOpponentCount(): int
    {
        return $this->blastConeOppositeOpponentCount;
    }

    public function getBountyGold(): int
    {
        return $this->bountyGold;
    }

    public function getBuffsStolen(): int
    {
        return $this->buffsStolen;
    }

    public function getCompleteSupportQuestInTime(): int
    {
        return $this->completeSupportQuestInTime;
    }

    public function getControlWardsPlaced(): int
    {
        return $this->controlWardsPlaced;
    }

    public function getDamagePerMinute(): float
    {
        return $this->damagePerMinute;
    }

    public function getDamageTakenOnTeamPercentage(): float
    {
        return $this->damageTakenOnTeamPercentage;
    }

    public function getDancedWithRiftHerald(): int
    {
        return $this->dancedWithRiftHerald;
    }

    public function getDeathsByEnemyChamps(): int
    {
        return $this->deathsByEnemyChamps;
    }

    public function getDodgeSkillShotsSmallWindow(): int
    {
        return $this->dodgeSkillShotsSmallWindow;
    }

    public function getDoubleAces(): int
    {
        return $this->doubleAces;
    }

    public function getDragonTakedowns(): int
    {
        return $this->dragonTakedowns;
    }

    public function getEarlyLaningPhaseGoldExpAdvantage(): int
    {
        return $this->earlyLaningPhaseGoldExpAdvantage;
    }

    public function getEffectiveHealAndShielding(): int
    {
        return $this->effectiveHealAndShielding;
    }

    public function getElderDragonKillsWithOpposingSoul(): int
    {
        return $this->elderDragonKillsWithOpposingSoul;
    }

    public function getElderDragonMultikills(): int
    {
        return $this->elderDragonMultikills;
    }

    public function getEnemyChampionImmobilizations(): int
    {
        return $this->enemyChampionImmobilizations;
    }

    public function getEnemyJungleMonsterKills(): int
    {
        return $this->enemyJungleMonsterKills;
    }

    public function getEpicMonsterKillsNearEnemyJungler(): int
    {
        return $this->epicMonsterKillsNearEnemyJungler;
    }

    public function getEpicMonsterKillsWithin30SecondsOfSpawn(): int
    {
        return $this->epicMonsterKillsWithin30SecondsOfSpawn;
    }

    public function getEpicMonsterSteals(): int
    {
        return $this->epicMonsterSteals;
    }

    public function getEpicMonsterStolenWithoutSmite(): int
    {
        return $this->epicMonsterStolenWithoutSmite;
    }

    public function getFlawlessAces(): int
    {
        return $this->flawlessAces;
    }

    public function getFullTeamTakedown(): int
    {
        return $this->fullTeamTakedown;
    }

    public function getGameLength(): float
    {
        return $this->gameLength;
    }

    public function getGetTakedownsInAllLanesEarlyJungleAsLaner(): int
    {
        return $this->getTakedownsInAllLanesEarlyJungleAsLaner;
    }

    public function getGoldPerMinute(): float
    {
        return $this->goldPerMinute;
    }

    public function getHadOpenNexus(): int
    {
        return $this->hadOpenNexus;
    }

    public function getImmobilizeAndKillWithAlly(): int
    {
        return $this->immobilizeAndKillWithAlly;
    }

    public function getInitialBuffCount(): int
    {
        return $this->initialBuffCount;
    }

    public function getInitialCrabCount(): int
    {
        return $this->initialCrabCount;
    }

    public function getJungleCsBefore10Minutes(): int
    {
        return $this->jungleCsBefore10Minutes;
    }

    public function getJunglerTakedownsNearDamagedEpicMonster(): int
    {
        return $this->junglerTakedownsNearDamagedEpicMonster;
    }

    public function getKTurretsDestroyedBeforePlatesFall(): int
    {
        return $this->kTurretsDestroyedBeforePlatesFall;
    }

    public function getKda(): float
    {
        return $this->kda;
    }

    public function getKillAfterHiddenWithAlly(): int
    {
        return $this->killAfterHiddenWithAlly;
    }

    public function getKillParticipation(): float
    {
        return $this->killParticipation;
    }

    public function getKilledChampTookFullTeamDamageSurvived(): int
    {
        return $this->killedChampTookFullTeamDamageSurvived;
    }

    public function getKillsNearEnemyTurret(): int
    {
        return $this->killsNearEnemyTurret;
    }

    public function getKillsOnOtherLanesEarlyJungleAsLaner(): int
    {
        return $this->killsOnOtherLanesEarlyJungleAsLaner;
    }

    public function getKillsOnRecentlyHealedByAramPack(): int
    {
        return $this->killsOnRecentlyHealedByAramPack;
    }

    public function getKillsUnderOwnTurret(): int
    {
        return $this->killsUnderOwnTurret;
    }

    public function getKillsWithHelpFromEpicMonster(): int
    {
        return $this->killsWithHelpFromEpicMonster;
    }

    public function getKnockEnemyIntoTeamAndKill(): int
    {
        return $this->knockEnemyIntoTeamAndKill;
    }

    public function getLandSkillShotsEarlyGame(): int
    {
        return $this->landSkillShotsEarlyGame;
    }

    public function getLaneMinionsFirst10Minutes(): int
    {
        return $this->laneMinionsFirst10Minutes;
    }

    public function getLaningPhaseGoldExpAdvantage(): int
    {
        return $this->laningPhaseGoldExpAdvantage;
    }

    public function getLegendaryCount(): int
    {
        return $this->legendaryCount;
    }

    public function getLostAnInhibitor(): int
    {
        return $this->lostAnInhibitor;
    }

    public function getMaxCsAdvantageOnLaneOpponent(): int
    {
        return $this->maxCsAdvantageOnLaneOpponent;
    }

    public function getMaxKillDeficit(): int
    {
        return $this->maxKillDeficit;
    }

    public function getMaxLevelLeadLaneOpponent(): int
    {
        return $this->maxLevelLeadLaneOpponent;
    }

    public function getMoreEnemyJungleThanOpponent(): int
    {
        return $this->moreEnemyJungleThanOpponent;
    }

    public function getMultiKillOneSpell(): int
    {
        return $this->multiKillOneSpell;
    }

    public function getMultiTurretRiftHeraldCount(): int
    {
        return $this->multiTurretRiftHeraldCount;
    }

    public function getMultikills(): int
    {
        return $this->multikills;
    }

    public function getMultikillsAfterAggressiveFlash(): int
    {
        return $this->multikillsAfterAggressiveFlash;
    }

    public function getMythicItemUsed(): int
    {
        return $this->mythicItemUsed;
    }

    public function getOuterTurretExecutesBefore10Minutes(): int
    {
        return $this->outerTurretExecutesBefore10Minutes;
    }

    public function getOutnumberedKills(): int
    {
        return $this->outnumberedKills;
    }

    public function getOutnumberedNexusKill(): int
    {
        return $this->outnumberedNexusKill;
    }

    public function getPerfectDragonSoulsTaken(): int
    {
        return $this->perfectDragonSoulsTaken;
    }

    public function getPerfectGame(): int
    {
        return $this->perfectGame;
    }

    public function getPickKillWithAlly(): int
    {
        return $this->pickKillWithAlly;
    }

    public function getPoroExplosions(): int
    {
        return $this->poroExplosions;
    }

    public function getQuickCleanse(): int
    {
        return $this->quickCleanse;
    }

    public function getQuickFirstTurret(): int
    {
        return $this->quickFirstTurret;
    }

    public function getQuickSoloKills(): int
    {
        return $this->quickSoloKills;
    }

    public function getRiftHeraldTakedowns(): int
    {
        return $this->riftHeraldTakedowns;
    }

    public function getSaveAllyFromDeath(): int
    {
        return $this->saveAllyFromDeath;
    }

    public function getScuttleCrabKills(): int
    {
        return $this->scuttleCrabKills;
    }

    public function getShortestTimeToAceFromFirstTakedown(): float
    {
        return $this->shortestTimeToAceFromFirstTakedown;
    }

    public function getSkillshotsDodged(): int
    {
        return $this->skillshotsDodged;
    }

    public function getSkillshotsHit(): int
    {
        return $this->skillshotsHit;
    }

    public function getSnowballsHit(): int
    {
        return $this->snowballsHit;
    }

    public function getSoloBaronKills(): int
    {
        return $this->soloBaronKills;
    }

    public function getSoloKills(): int
    {
        return $this->soloKills;
    }

    public function getStealthWardsPlaced(): int
    {
        return $this->stealthWardsPlaced;
    }

    public function getSurvivedSingleDigitHpCount(): int
    {
        return $this->survivedSingleDigitHpCount;
    }

    public function getSurvivedThreeImmobilizesInFight(): int
    {
        return $this->survivedThreeImmobilizesInFight;
    }

    public function getTakedownOnFirstTurret(): int
    {
        return $this->takedownOnFirstTurret;
    }

    public function getTakedowns(): int
    {
        return $this->takedowns;
    }

    public function getTakedownsAfterGainingLevelAdvantage(): int
    {
        return $this->takedownsAfterGainingLevelAdvantage;
    }

    public function getTakedownsBeforeJungleMinionSpawn(): int
    {
        return $this->takedownsBeforeJungleMinionSpawn;
    }

    public function getTakedownsFirstXMinutes(): int
    {
        return $this->takedownsFirstXMinutes;
    }

    public function getTakedownsInAlcove(): int
    {
        return $this->takedownsInAlcove;
    }

    public function getTakedownsInEnemyFountain(): int
    {
        return $this->takedownsInEnemyFountain;
    }

    public function getTeamBaronKills(): int
    {
        return $this->teamBaronKills;
    }

    public function getTeamDamagePercentage(): float
    {
        return $this->teamDamagePercentage;
    }

    public function getTeamElderDragonKills(): int
    {
        return $this->teamElderDragonKills;
    }

    public function getTeamRiftHeraldKills(): int
    {
        return $this->teamRiftHeraldKills;
    }

    public function getThreeWardsOneSweeperCount(): int
    {
        return $this->threeWardsOneSweeperCount;
    }

    public function getTookLargeDamageSurvived(): int
    {
        return $this->tookLargeDamageSurvived;
    }

    public function getTurretPlatesTaken(): int
    {
        return $this->turretPlatesTaken;
    }

    public function getTurretTakedowns(): int
    {
        return $this->turretTakedowns;
    }

    public function getTurretsTakenWithRiftHerald(): int
    {
        return $this->turretsTakenWithRiftHerald;
    }

    public function getTwentyMinionsIn3SecondsCount(): int
    {
        return $this->twentyMinionsIn3SecondsCount;
    }

    public function getUnseenRecalls(): int
    {
        return $this->unseenRecalls;
    }

    public function getVisionScoreAdvantageLaneOpponent(): int
    {
        return $this->visionScoreAdvantageLaneOpponent;
    }

    public function getVisionScorePerMinute(): int
    {
        return $this->visionScorePerMinute;
    }

    public function getWardTakedowns(): int
    {
        return $this->wardTakedowns;
    }

    public function getWardTakedownsBefore20M(): int
    {
        return $this->wardTakedownsBefore20M;
    }

    public function getWardsGuarded(): int
    {
        return $this->wardsGuarded;
    }
}
