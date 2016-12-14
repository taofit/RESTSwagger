<?php
namespace AppBundle\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateUserCommand
 *
 * @author tao
 */
class CreateUserCommand extends Command {
    //put your code here
    protected function configure() {
        parent::configure();
        $this->setName('app:create-users')
             ->setDescription('Creates new Users')
             ->setHelp('This command allows you to create users...');
    }
    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->write([
            'User created',
            '============',
            '',
        ]);
        $output->writeln("Whoas");
        $output->write('You are about to create ');
        $output->write('a user... ');
    }
    
}
