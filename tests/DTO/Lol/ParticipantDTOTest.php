<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\ParticipantDTO;

class ParticipantDTOTest extends TestCase
{
    public const DATA = [
        'allInPings' => 0,
        'assistMePings' => 0,
        'assists' => 25,
        'baitPings' => 0,
        'baronKills' => 0,
        'basicPings' => 0,
        'bountyLevel' => 0,
        'challenges' => ChallengesDTOTest::DATA,
        'champExperience' => 18339,
        'champLevel' => 17,
        'championId' => 202,
        'championName' => 'Jhin',
        'championTransform' => 0,
        'commandPings' => 1,
        'consumablesPurchased' => 0,
        'damageDealtToBuildings' => 1062,
        'damageDealtToObjectives' => 1062,
        'damageDealtToTurrets' => 1062,
        'damageSelfMitigated' => 7010,
        'dangerPings' => 0,
        'deaths' => 8,
        'detectorWardsPlaced' => 0,
        'doubleKills' => 0,
        'dragonKills' => 0,
        'eligibleForProgression' => true,
        'enemyMissingPings' => 0,
        'enemyVisionPings' => 0,
        'firstBloodAssist' => false,
        'firstBloodKill' => false,
        'firstTowerAssist' => false,
        'firstTowerKill' => false,
        'gameEndedInEarlySurrender' => false,
        'gameEndedInSurrender' => false,
        'getBackPings' => 2,
        'goldEarned' => 11686,
        'goldSpent' => 12700,
        'holdPings' => 0,
        'individualPosition' => 'Invalid',
        'inhibitorKills' => 0,
        'inhibitorTakedowns' => 0,
        'inhibitorsLost' => 2,
        'item0' => 3094,
        'item1' => 6671,
        'item2' => 3031,
        'item3' => 3006,
        'item4' => 1018,
        'item5' => 0,
        'item6' => 2052,
        'itemsPurchased' => 19,
        'killingSprees' => 1,
        'kills' => 5,
        'lane' => 'NONE',
        'largestCriticalStrike' => 1107,
        'largestKillingSpree' => 2,
        'largestMultiKill' => 1,
        'longestTimeSpentLiving' => 286,
        'magicDamageDealt' => 4890,
        'magicDamageDealtToChampions' => 1428,
        'magicDamageTaken' => 13962,
        'needVisionPings' => 0,
        'neutralMinionsKilled' => 0,
        'nexusKills' => 0,
        'nexusLost' => 1,
        'nexusTakedowns' => 0,
        'objectivesStolen' => 0,
        'objectivesStolenAssists' => 0,
        'onMyWayPings' => 0,
        'participantId' => 1,
        'pentaKills' => 0,
        'perks' => PerksDTOTest::DATA,
        'physicalDamageDealt' => 56345,
        'physicalDamageDealtToChampions' => 21267,
        'physicalDamageTaken' => 7694,
        'profileIcon' => 5737,
        'pushPings' => 0,
        'puuid' => 'wiA7GfynmL_4TteVMW7cxF3gHcITLza8rHk_K-kps-f6aEBKTLf_FHiVs8MwCJ7hNmvi4Ti0378PAg',
        'quadraKills' => 0,
        'riotIdName' => '',
        'riotIdTagline' => '',
        'role' => 'SUPPORT',
        'sightWardsBoughtInGame' => 0,
        'spell1Casts' => 57,
        'spell2Casts' => 43,
        'spell3Casts' => 46,
        'spell4Casts' => 28,
        'summoner1Casts' => 5,
        'summoner1Id' => 4,
        'summoner2Casts' => 4,
        'summoner2Id' => 1,
        'summonerId' => 'K95Z59AUTwliZtVPIzWIj_X6q9LMTZ2Z16ylAGMXXcz48FI_ondPtlYsuA',
        'summonerLevel' => 71,
        'summonerName' => 'Rashomón',
        'teamEarlySurrendered' => false,
        'teamId' => 100,
        'teamPosition' => '',
        'timeCCingOthers' => 38,
        'timePlayed' => 1135,
        'totalDamageDealt' => 61236,
        'totalDamageDealtToChampions' => 22696,
        'totalDamageShieldedOnTeammates' => 0,
        'totalDamageTaken' => 23273,
        'totalHeal' => 5210,
        'totalHealsOnTeammates' => 0,
        'totalMinionsKilled' => 44,
        'totalTimeCCDealt' => 130,
        'totalTimeSpentDead' => 218,
        'totalUnitsHealed' => 1,
        'tripleKills' => 0,
        'trueDamageDealt' => 0,
        'trueDamageDealtToChampions' => 0,
        'trueDamageTaken' => 1615,
        'turretKills' => 1,
        'turretTakedowns' => 1,
        'turretsLost' => 4,
        'unrealKills' => 0,
        'visionClearedPings' => 0,
        'visionScore' => 0,
        'visionWardsBoughtInGame' => 0,
        'wardsKilled' => 0,
        'wardsPlaced' => 0,
        'win' => false,
    ];

    public function testCreateFromArray(): void
    {
        $object = ParticipantDTO::createFromArray(self::DATA);
        self::assertEquals(0, $object->getAllInPings());
        self::assertEquals(0, $object->getAssistMePings());
        self::assertEquals(25, $object->getAssists());
        self::assertEquals(0, $object->getBaitPings());
        self::assertEquals(0, $object->getBaronKills());
        self::assertEquals(0, $object->getBasicPings());
        self::assertEquals(0, $object->getBountyLevel());
        self::assertEquals(18339, $object->getChampExperience());
        self::assertEquals(17, $object->getChampLevel());
        self::assertEquals(202, $object->getChampionId());
        self::assertEquals('Jhin', $object->getChampionName());
        self::assertEquals(0, $object->getChampionTransform());
        self::assertEquals(1, $object->getCommandPings());
        self::assertEquals(0, $object->getConsumablesPurchased());
        self::assertEquals(1062, $object->getDamageDealtToBuildings());
        self::assertEquals(1062, $object->getDamageDealtToObjectives());
        self::assertEquals(1062, $object->getDamageDealtToTurrets());
        self::assertEquals(7010, $object->getDamageSelfMitigated());
        self::assertEquals(0, $object->getDangerPings());
        self::assertEquals(8, $object->getDeaths());
        self::assertEquals(0, $object->getDetectorWardsPlaced());
        self::assertEquals(0, $object->getDoubleKills());
        self::assertEquals(0, $object->getDragonKills());
        self::assertTrue($object->isEligibleForProgression());
        self::assertEquals(0, $object->getEnemyMissingPings());
        self::assertEquals(0, $object->getEnemyVisionPings());
        self::assertFalse($object->isFirstBloodAssist());
        self::assertFalse($object->isFirstBloodKill());
        self::assertFalse($object->isFirstTowerAssist());
        self::assertFalse($object->isFirstTowerKill());
        self::assertFalse($object->isGameEndedInEarlySurrender());
        self::assertFalse($object->isGameEndedInSurrender());
        self::assertEquals(2, $object->getGetBackPings());
        self::assertEquals(11686, $object->getGoldEarned());
        self::assertEquals(12700, $object->getGoldSpent());
        self::assertEquals(0, $object->getHoldPings());
        self::assertEquals('Invalid', $object->getIndividualPosition());
        self::assertEquals(0, $object->getInhibitorKills());
        self::assertEquals(0, $object->getInhibitorTakedowns());
        self::assertEquals(2, $object->getInhibitorsLost());
        self::assertEquals(3094, $object->getItem0());
        self::assertEquals(6671, $object->getItem1());
        self::assertEquals(3031, $object->getItem2());
        self::assertEquals(3006, $object->getItem3());
        self::assertEquals(1018, $object->getItem4());
        self::assertEquals(0, $object->getItem5());
        self::assertEquals(2052, $object->getItem6());
        self::assertEquals(19, $object->getItemsPurchased());
        self::assertEquals(1, $object->getKillingSprees());
        self::assertEquals(5, $object->getKills());
        self::assertEquals('NONE', $object->getLane());
        self::assertEquals(1107, $object->getLargestCriticalStrike());
        self::assertEquals(2, $object->getLargestKillingSpree());
        self::assertEquals(1, $object->getLargestMultiKill());
        self::assertEquals(286, $object->getLongestTimeSpentLiving());
        self::assertEquals(4890, $object->getMagicDamageDealt());
        self::assertEquals(1428, $object->getMagicDamageDealtToChampions());
        self::assertEquals(13962, $object->getMagicDamageTaken());
        self::assertEquals(0, $object->getNeedVisionPings());
        self::assertEquals(0, $object->getNeutralMinionsKilled());
        self::assertEquals(0, $object->getNexusKills());
        self::assertEquals(1, $object->getNexusLost());
        self::assertEquals(0, $object->getNexusTakedowns());
        self::assertEquals(0, $object->getObjectivesStolen());
        self::assertEquals(0, $object->getObjectivesStolenAssists());
        self::assertEquals(0, $object->getOnMyWayPings());
        self::assertEquals(1, $object->getParticipantId());
        self::assertEquals(0, $object->getPentaKills());
        self::assertEquals(56345, $object->getPhysicalDamageDealt());
        self::assertEquals(21267, $object->getPhysicalDamageDealtToChampions());
        self::assertEquals(7694, $object->getPhysicalDamageTaken());
        self::assertEquals(5737, $object->getProfileIcon());
        self::assertEquals(0, $object->getPushPings());
        self::assertEquals('wiA7GfynmL_4TteVMW7cxF3gHcITLza8rHk_K-kps-f6aEBKTLf_FHiVs8MwCJ7hNmvi4Ti0378PAg', $object->getPuuid());
        self::assertEquals(0, $object->getQuadraKills());
        self::assertEquals('', $object->getRiotIdName());
        self::assertEquals('', $object->getRiotIdTagline());
        self::assertEquals('SUPPORT', $object->getRole());
        self::assertEquals(0, $object->getSightWardsBoughtInGame());
        self::assertEquals(57, $object->getSpell1Casts());
        self::assertEquals(43, $object->getSpell2Casts());
        self::assertEquals(46, $object->getSpell3Casts());
        self::assertEquals(28, $object->getSpell4Casts());
        self::assertEquals(5, $object->getSummoner1Casts());
        self::assertEquals(4, $object->getSummoner1Id());
        self::assertEquals(4, $object->getSummoner2Casts());
        self::assertEquals(1, $object->getSummoner2Id());
        self::assertEquals('K95Z59AUTwliZtVPIzWIj_X6q9LMTZ2Z16ylAGMXXcz48FI_ondPtlYsuA', $object->getSummonerId());
        self::assertEquals(71, $object->getSummonerLevel());
        self::assertEquals('Rashomón', $object->getSummonerName());
        self::assertFalse($object->isTeamEarlySurrendered());
        self::assertEquals(100, $object->getTeamId());
        self::assertEquals('', $object->getTeamPosition());
        self::assertEquals(38, $object->getTimeCCingOthers());
        self::assertEquals(1135, $object->getTimePlayed());
        self::assertEquals(61236, $object->getTotalDamageDealt());
        self::assertEquals(22696, $object->getTotalDamageDealtToChampions());
        self::assertEquals(0, $object->getTotalDamageShieldedOnTeammates());
        self::assertEquals(23273, $object->getTotalDamageTaken());
        self::assertEquals(5210, $object->getTotalHeal());
        self::assertEquals(0, $object->getTotalHealsOnTeammates());
        self::assertEquals(44, $object->getTotalMinionsKilled());
        self::assertEquals(130, $object->getTotalTimeCCDealt());
        self::assertEquals(218, $object->getTotalTimeSpentDead());
        self::assertEquals(1, $object->getTotalUnitsHealed());
        self::assertEquals(0, $object->getTripleKills());
        self::assertEquals(0, $object->getTrueDamageDealt());
        self::assertEquals(0, $object->getTrueDamageDealtToChampions());
        self::assertEquals(1615, $object->getTrueDamageTaken());
        self::assertEquals(1, $object->getTurretKills());
        self::assertEquals(1, $object->getTurretTakedowns());
        self::assertEquals(4, $object->getTurretsLost());
        self::assertEquals(0, $object->getUnrealKills());
        self::assertEquals(0, $object->getVisionClearedPings());
        self::assertEquals(0, $object->getVisionScore());
        self::assertEquals(0, $object->getVisionWardsBoughtInGame());
        self::assertEquals(0, $object->getWardsKilled());
        self::assertEquals(0, $object->getWardsPlaced());
        self::assertFalse($object->isWin());
    }
}
