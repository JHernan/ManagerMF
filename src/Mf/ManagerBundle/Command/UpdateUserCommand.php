<?php

namespace Mf\ManagerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateUserCommand extends ContainerAwareCommand
{
    protected function configure()
    {   
        $this
            ->setName('mf:update-user')
            ->setDescription('Update User')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $mf_user = $this->getContainer()->get('mf.manager.mf_user');
        $mf_user->updateUser();
    }
}

?>