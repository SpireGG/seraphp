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
    public const RESOURCE_LEAGUE = '1424:league';

    public function getByQueueAndTierAndDivision(
        QueueEnum $queue,
        TierExpEnum $tier,
        DivisionEnum $division,
        RegionEnum $region,
        int $page = 1
    ): LeagueEntryDTOCollection {
        $response = $this->riotConnection->get(
            $region->getValue(),
            "lol/league/v4/entries/{$queue->getValue()}/{$tier->getValue()}/{$division->getValue()}?page={$page}",
            $this->getResource()
        );

        return LeagueEntryDTOCollection::createFromArray($response->getBodyContentsDecodedAsArray());
    }

    protected function getResource(): string
    {
        return self::RESOURCE_LEAGUE;
    }
}
