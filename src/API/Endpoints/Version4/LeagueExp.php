<?php

declare(strict_types=1);

namespace SeraPHP\API\Endpoints\Version4;

use SeraPHP\API\AbstractApi;
use SeraPHP\Collection\LeagueEntryDTOCollection;
use SeraPHP\Enum\DivisionEnum;
use SeraPHP\Enum\QueueEnum;
use SeraPHP\Enum\RegionEnum;
use SeraPHP\Enum\TierExpEnum;

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
