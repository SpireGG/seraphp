<?php

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\ChallengesDTO;

class ChallengesDTOTest extends TestCase
{
    public const DATA = [
        '12AssistStreakCount' => 0,
        'abilityUses' => 174,
        'acesBefore15Minutes' => 1,
        'alliedJungleMonsterKills' => 0,
        'baronTakedowns' => 0,
        'blastConeOppositeOpponentCount' => 0,
        'bountyGold' => 0,
        'buffsStolen' => 0,
        'completeSupportQuestInTime' => 0,
        'controlWardsPlaced' => 0,
        'damagePerMinute' => 1199.2289827711,
        'damageTakenOnTeamPercentage' => 0.14157469227082,
        'dancedWithRiftHerald' => 0,
        'deathsByEnemyChamps' => 8,
        'dodgeSkillShotsSmallWindow' => 2,
        'doubleAces' => 0,
        'dragonTakedowns' => 0,
        'earlyLaningPhaseGoldExpAdvantage' => 0,
        'effectiveHealAndShielding' => 0,
        'elderDragonKillsWithOpposingSoul' => 0,
        'elderDragonMultikills' => 0,
        'enemyChampionImmobilizations' => 17,
        'enemyJungleMonsterKills' => 0,
        'epicMonsterKillsNearEnemyJungler' => 0,
        'epicMonsterKillsWithin30SecondsOfSpawn' => 0,
        'epicMonsterSteals' => 0,
        'epicMonsterStolenWithoutSmite' => 0,
        'flawlessAces' => 0,
        'fullTeamTakedown' => 12,
        'gameLength' => 1135.5364344,
        'getTakedownsInAllLanesEarlyJungleAsLaner' => 0,
        'goldPerMinute' => 617.48080632524,
        'hadOpenNexus' => 0,
        'immobilizeAndKillWithAlly' => 7,
        'initialBuffCount' => 0,
        'initialCrabCount' => 0,
        'jungleCsBefore10Minutes' => 0,
        'junglerTakedownsNearDamagedEpicMonster' => 0,
        'kTurretsDestroyedBeforePlatesFall' => 1,
        'kda' => 3.75,
        'killAfterHiddenWithAlly' => 1,
        'killParticipation' => 0.51724137931034,
        'killedChampTookFullTeamDamageSurvived' => 0,
        'killsNearEnemyTurret' => 0,
        'killsOnOtherLanesEarlyJungleAsLaner' => 0,
        'killsOnRecentlyHealedByAramPack' => 0,
        'killsUnderOwnTurret' => 3,
        'killsWithHelpFromEpicMonster' => 0,
        'knockEnemyIntoTeamAndKill' => 0,
        'landSkillShotsEarlyGame' => 5,
        'laneMinionsFirst10Minutes' => 27,
        'laningPhaseGoldExpAdvantage' => 0,
        'legendaryCount' => 0,
        'lostAnInhibitor' => 0,
        'maxCsAdvantageOnLaneOpponent' => 6,
        'maxKillDeficit' => 0,
        'maxLevelLeadLaneOpponent' => 2,
        'moreEnemyJungleThanOpponent' => 0,
        'multiKillOneSpell' => 0,
        'multiTurretRiftHeraldCount' => 0,
        'multikills' => 0,
        'multikillsAfterAggressiveFlash' => 0,
        'mythicItemUsed' => 6671,
        'outerTurretExecutesBefore10Minutes' => 0,
        'outnumberedKills' => 1,
        'outnumberedNexusKill' => 0,
        'perfectDragonSoulsTaken' => 0,
        'perfectGame' => 0,
        'pickKillWithAlly' => 23,
        'poroExplosions' => 0,
        'quickCleanse' => 0,
        'quickFirstTurret' => 0,
        'quickSoloKills' => 0,
        'riftHeraldTakedowns' => 0,
        'saveAllyFromDeath' => 0,
        'scuttleCrabKills' => 0,
        'shortestTimeToAceFromFirstTakedown' => 10.839271,
        'skillshotsDodged' => 14,
        'skillshotsHit' => 16,
        'snowballsHit' => 0,
        'soloBaronKills' => 0,
        'soloKills' => 0,
        'stealthWardsPlaced' => 0,
        'survivedSingleDigitHpCount' => 0,
        'survivedThreeImmobilizesInFight' => 1,
        'takedownOnFirstTurret' => 0,
        'takedowns' => 30,
        'takedownsAfterGainingLevelAdvantage' => 0,
        'takedownsBeforeJungleMinionSpawn' => 1,
        'takedownsFirstXMinutes' => 24,
        'takedownsInAlcove' => 0,
        'takedownsInEnemyFountain' => 0,
        'teamBaronKills' => 0,
        'teamDamagePercentage' => 0.13467895204712,
        'teamElderDragonKills' => 0,
        'teamRiftHeraldKills' => 0,
        'threeWardsOneSweeperCount' => 0,
        'tookLargeDamageSurvived' => 0,
        'turretPlatesTaken' => 0,
        'turretTakedowns' => 1,
        'turretsTakenWithRiftHerald' => 0,
        'twentyMinionsIn3SecondsCount' => 1,
        'unseenRecalls' => 0,
        'visionScoreAdvantageLaneOpponent' => -1,
        'visionScorePerMinute' => 0,
        'wardTakedowns' => 1,
        'wardTakedownsBefore20M' => 1,
        'wardsGuarded' => 0,
    ];

    public function testCreateFromArray(): void
    {
        $object = ChallengesDTO::createFromArray(self::DATA);
        self::assertEquals(0, $object->getAssistStreakCount());
        self::assertEquals(174, $object->getAbilityUses());
        self::assertEquals(1, $object->getAcesBefore15Minutes());
        self::assertEquals(0, $object->getAlliedJungleMonsterKills());
        self::assertEquals(0, $object->getBaronTakedowns());
        self::assertEquals(0, $object->getBlastConeOppositeOpponentCount());
        self::assertEquals(0, $object->getBountyGold());
        self::assertEquals(0, $object->getBuffsStolen());
        self::assertEquals(0, $object->getCompleteSupportQuestInTime());
        self::assertEquals(0, $object->getControlWardsPlaced());
        self::assertEquals(1199.2289827711, $object->getDamagePerMinute());
        self::assertEquals(0.14157469227082, $object->getDamageTakenOnTeamPercentage());
        self::assertEquals(0, $object->getDancedWithRiftHerald());
        self::assertEquals(8, $object->getDeathsByEnemyChamps());
        self::assertEquals(2, $object->getDodgeSkillShotsSmallWindow());
        self::assertEquals(0, $object->getDoubleAces());
        self::assertEquals(0, $object->getDragonTakedowns());
        self::assertEquals(0, $object->getEarlyLaningPhaseGoldExpAdvantage());
        self::assertEquals(0, $object->getEffectiveHealAndShielding());
        self::assertEquals(0, $object->getElderDragonKillsWithOpposingSoul());
        self::assertEquals(0, $object->getElderDragonMultikills());
        self::assertEquals(17, $object->getEnemyChampionImmobilizations());
        self::assertEquals(0, $object->getEnemyJungleMonsterKills());
        self::assertEquals(0, $object->getEpicMonsterKillsNearEnemyJungler());
        self::assertEquals(0, $object->getEpicMonsterKillsWithin30SecondsOfSpawn());
        self::assertEquals(0, $object->getEpicMonsterSteals());
        self::assertEquals(0, $object->getEpicMonsterStolenWithoutSmite());
        self::assertEquals(0, $object->getFlawlessAces());
        self::assertEquals(12, $object->getFullTeamTakedown());
        self::assertEquals(1135.5364344, $object->getGameLength());
        self::assertEquals(0, $object->getGetTakedownsInAllLanesEarlyJungleAsLaner());
        self::assertEquals(617.48080632524, $object->getGoldPerMinute());
        self::assertEquals(0, $object->getHadOpenNexus());
        self::assertEquals(7, $object->getImmobilizeAndKillWithAlly());
        self::assertEquals(0, $object->getInitialBuffCount());
        self::assertEquals(0, $object->getInitialCrabCount());
        self::assertEquals(0, $object->getJungleCsBefore10Minutes());
        self::assertEquals(0, $object->getJunglerTakedownsNearDamagedEpicMonster());
        self::assertEquals(1, $object->getKTurretsDestroyedBeforePlatesFall());
        self::assertEquals(3.75, $object->getKda());
        self::assertEquals(1, $object->getKillAfterHiddenWithAlly());
        self::assertEquals(0.51724137931034, $object->getKillParticipation());
        self::assertEquals(0, $object->getKilledChampTookFullTeamDamageSurvived());
        self::assertEquals(0, $object->getKillsNearEnemyTurret());
        self::assertEquals(0, $object->getKillsOnOtherLanesEarlyJungleAsLaner());
        self::assertEquals(0, $object->getKillsOnRecentlyHealedByAramPack());
        self::assertEquals(3, $object->getKillsUnderOwnTurret());
        self::assertEquals(0, $object->getKillsWithHelpFromEpicMonster());
        self::assertEquals(0, $object->getKnockEnemyIntoTeamAndKill());
        self::assertEquals(5, $object->getLandSkillShotsEarlyGame());
        self::assertEquals(27, $object->getLaneMinionsFirst10Minutes());
        self::assertEquals(0, $object->getLaningPhaseGoldExpAdvantage());
        self::assertEquals(0, $object->getLegendaryCount());
        self::assertEquals(0, $object->getLostAnInhibitor());
        self::assertEquals(6, $object->getMaxCsAdvantageOnLaneOpponent());
        self::assertEquals(0, $object->getMaxKillDeficit());
        self::assertEquals(2, $object->getMaxLevelLeadLaneOpponent());
        self::assertEquals(0, $object->getMoreEnemyJungleThanOpponent());
        self::assertEquals(0, $object->getMultiKillOneSpell());
        self::assertEquals(0, $object->getMultiTurretRiftHeraldCount());
        self::assertEquals(0, $object->getMultikills());
        self::assertEquals(0, $object->getMultikillsAfterAggressiveFlash());
        self::assertEquals(6671, $object->getMythicItemUsed());
        self::assertEquals(0, $object->getOuterTurretExecutesBefore10Minutes());
        self::assertEquals(1, $object->getOutnumberedKills());
        self::assertEquals(0, $object->getOutnumberedNexusKill());
        self::assertEquals(0, $object->getPerfectDragonSoulsTaken());
        self::assertEquals(0, $object->getPerfectGame());
        self::assertEquals(23, $object->getPickKillWithAlly());
        self::assertEquals(0, $object->getPoroExplosions());
        self::assertEquals(0, $object->getQuickCleanse());
        self::assertEquals(0, $object->getQuickFirstTurret());
        self::assertEquals(0, $object->getQuickSoloKills());
        self::assertEquals(0, $object->getRiftHeraldTakedowns());
        self::assertEquals(0, $object->getSaveAllyFromDeath());
        self::assertEquals(0, $object->getScuttleCrabKills());
        self::assertEquals(10.839271, $object->getShortestTimeToAceFromFirstTakedown());
        self::assertEquals(14, $object->getSkillshotsDodged());
        self::assertEquals(16, $object->getSkillshotsHit());
        self::assertEquals(0, $object->getSnowballsHit());
        self::assertEquals(0, $object->getSoloBaronKills());
        self::assertEquals(0, $object->getSoloKills());
        self::assertEquals(0, $object->getStealthWardsPlaced());
        self::assertEquals(0, $object->getSurvivedSingleDigitHpCount());
        self::assertEquals(1, $object->getSurvivedThreeImmobilizesInFight());
        self::assertEquals(0, $object->getTakedownOnFirstTurret());
        self::assertEquals(30, $object->getTakedowns());
        self::assertEquals(0, $object->getTakedownsAfterGainingLevelAdvantage());
        self::assertEquals(1, $object->getTakedownsBeforeJungleMinionSpawn());
        self::assertEquals(24, $object->getTakedownsFirstXMinutes());
        self::assertEquals(0, $object->getTakedownsInAlcove());
        self::assertEquals(0, $object->getTakedownsInEnemyFountain());
        self::assertEquals(0, $object->getTeamBaronKills());
        self::assertEquals(0.13467895204712, $object->getTeamDamagePercentage());
        self::assertEquals(0, $object->getTeamElderDragonKills());
        self::assertEquals(0, $object->getTeamRiftHeraldKills());
        self::assertEquals(0, $object->getThreeWardsOneSweeperCount());
        self::assertEquals(0, $object->getTookLargeDamageSurvived());
        self::assertEquals(0, $object->getTurretPlatesTaken());
        self::assertEquals(1, $object->getTurretTakedowns());
        self::assertEquals(0, $object->getTurretsTakenWithRiftHerald());
        self::assertEquals(1, $object->getTwentyMinionsIn3SecondsCount());
        self::assertEquals(0, $object->getUnseenRecalls());
        self::assertEquals(-1, $object->getVisionScoreAdvantageLaneOpponent());
        self::assertEquals(0, $object->getVisionScorePerMinute());
        self::assertEquals(1, $object->getWardTakedowns());
        self::assertEquals(1, $object->getWardTakedownsBefore20M());
        self::assertEquals(0, $object->getWardsGuarded());
    }
}
