<?php

namespace Webman\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Webman\Console\Util;


class InstallCommand extends Command
{
    protected static $defaultName = 'install';
    protected static $defaultDescription = 'Execute webman installation script';

    /**
     * @return void
     */
    protected function configure()
    {

    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Execute installation for webman");
        $install_function = "\\Webman\\Install::install";
        if (is_callable($install_function)) {
            $install_function();
            return self::SUCCESS;
        }
        return self::FAILURE;
    }

}
