<?php

declare(strict_types=1);

namespace SeraPHPhine\API\Endpoints\Version4;

use SeraPHPhine\API\AbstractApi;
use SeraPHPhine\Collection\LeagueEntryDTOCollection;
use SeraPHPhine\Enum\DivisionEnum;
use SeraPHPhine\Enum\QueueEnum;
use SeraPHPhine\Enum\RegionEnum;
use SeraPHPhine\Enum\TierExpEnum;

final class LeagueExp extends AbstractApi
{
    public function getByQueueAndTierAndDivision(
        QueueEnum $queue,
        TierExpEnum $tier,
        DivisionEnum $division,
        RegionEnum $region,
        int $page = 1
    ): LeagueEntryDTOCollection {
        $response = $this->riotConnection->get(
            $region->getValue(),
            sprintf(
                'lol/league/v4/entries/%s/%s/%s?page=%d',
                $queue->getValue(),
                $tier->getValue(),
                $division->getValue(),
                $page
            ),
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }
}
