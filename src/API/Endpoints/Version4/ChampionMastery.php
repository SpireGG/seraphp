<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\Collection\ChampionMasteryDTOCollection;
use SeraPHPhine\DTO\ChampionMasteryDTO;
use SeraPHPhine\Enum\RegionEnum;

final class ChampionMastery extends AbstractApi
{
    /**
     * @param string $encryptedSummonerId
     * @param RegionEnum $region
     * @return ChampionMasteryDTOCollection
     */
    public function getBySummonerId(string $encryptedSummonerId, RegionEnum $region): ChampionMasteryDTOCollection
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf('lol/champion-mastery/v4/champion-masteries/by-summoner/%s', $encryptedSummonerId),
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
            sprintf(
                'lol/champion-mastery/v4/champion-masteries/by-summoner/%s/by-champion/%s',
                $encryptedSummonerId,
                $championId,
            ),
        );

        return ChampionMasteryDTO::createFromArray($response->getBodyContentsDecodedAsArray());
    }


    public function getScoreBySummonerId(string $encryptedSummonerId, RegionEnum $region): int
    {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'lol/champion-mastery/v4/scores/by-summoner/%s',
                $encryptedSummonerId,
            ),
        );

        return $response->getBodyContentsDecodedAsInt();
    }
}
