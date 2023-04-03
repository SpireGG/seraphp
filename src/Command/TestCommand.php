<?php

declare(strict_types=1);

namespace SeraPHP\Command;

use SeraPHP\Enum\RegionEnum;
use SeraPHP\SeraPHP;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'sera:test',
    description: 'Tests an api call.'
)]
class TestCommand extends Command
{
    private SeraPHP $seraphine;

    public function __construct(SeraPHP $seraphine)
    {
        parent::__construct();
        $this->seraphine = $seraphine;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $summoner = $this->seraphine->getSummoner()->getByName('Hantera', RegionEnum::EUW1());

        $currentGame = $this->seraphine->getSpectator()->getActiveGamesBySummonerId($summoner->getId(), RegionEnum::EUW1());
        dump($currentGame);die();

        return Command::SUCCESS;
    }
}
