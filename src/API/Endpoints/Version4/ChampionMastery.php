<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\Collection\ChampionMasteryDTOCollection;
use SeraPHP\DTO\ChampionMasteryDTO;
use SeraPHP\Enum\RegionEnum;

final class ChampionMastery extends AbstractApi
{
    public const RESOURCE_CHAMPIONMASTERY = '1418:champion-mastery';

    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): ChampionMasteryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/champion-mastery/v4/champion-masteries/by-summoner/{$encryptedSummonerId}",
            $this->getResource()
        );

        $championMasteries = $response->getBodyContentsDecodedAsArray();
        $collection = new ChampionMasteryDTOCollection();
        foreach ($championMasteries as $championMastery) {
            $collection->add(ChampionMasteryDTO::createFromArray($championMastery));
        }

        return $collection;
    }

    public function getBySummonerIdAndChampionId(
        string $encryptedSummonerId,
        int $championId,
        RegionEnum $region
    ): ChampionMasteryDTO {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/champion-mastery/v4/champion-masteries/by-summoner/{$encryptedSummonerId}/by-champion/{$championId}",
            $this->getResource()
        );

        return ChampionMasteryDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    public function getScoreBySummonerId(string $encryptedSummonerId, RegionEnum $region): int
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/champion-mastery/v4/scores/by-summoner/{$encryptedSummonerId}",
            $this->getResource()
        );

        return $response->getBodyContentsDecodedAsInt();
    }

    protected function getResource(): string
    {
        return self::RESOURCE_CHAMPIONMASTERY;
    }
}
