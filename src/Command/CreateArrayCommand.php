<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreateArrayCommand extends Command
{
    protected static $defaultName = 'CreateArrayCommand';
   
    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::REQUIRED)
            ;
            
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
 
      $num=[];
      $arraylength = $input->getArgument('arg1');

      for($i=0 ; $i<$arraylength; $i++){

         $num[$i]=random_int(1,5);
         $output->writeln($num[$i]);

        }
        
        $output->writeln(" En Büyük "." ".max($num)." En küçük "." ".min($num));

        return Command::SUCCESS;
    }
}
