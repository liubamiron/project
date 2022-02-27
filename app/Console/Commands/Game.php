<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;

class Game extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'russian roulette game';

    private CacheRepository $cacheRepository;


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CacheRepository $cacheRepository)
    {
        parent::__construct();
        $this->cacheRepository = $cacheRepository;
        
    }

    /**
     * Execute the console command.
     *
     * @return int
     */


    public function handle()
    {

        
        $diedStats = $this->cacheRepository->get('diedCount', 0);
        $surviveStats = $this->cacheRepository->get('surviveCount', 0);

        $bad_numbers = $this->cacheRepository->get('Bad-numbers', []);

        


        $executionCicle = True;
        $count = 1;
        $table = [];
        $table2 = [];
        $answer = 'survive';
        $res = 0;
        $random = random_int(1, 6);
        $random2 = random_int(1, 6);

        

        while ($executionCicle) {

            $random = random_int(1, 6);

            
            $bad_numbers[$random] = $bad_numbers[$random] ?? 0;
            $bad_numbers[$random]++;
    
            $this->cacheRepository->set('Bad-numbers', $bad_numbers, 86400);
    

           
            $res = $this->ask("Pull the triger!");

            if ($random === $random2) {
                // if ($random === 1) 

                $answer = 'die';
                $table[] = [$answer, $count, $random];
                $this->table(['answer', 'attempts', 'random_nr'], $table);
                $result = count($table); 
                

                $executionCicle = False;
                $this->info("You died");

                $diedStats++;

                $this->cacheRepository->set('diedCount', $diedStats, 86400);
              

            } elseif ($count > 6) {
                $executionCicle = False;
                $this->info("You survived");

                $surviveStats++;
                
                $this->cacheRepository->set('surviveCount', $surviveStats, 86400);
                

            } else {
                $table[] = [$answer, $count, $random];
                $this->table(['answer', 'attempts', 'random_nr'], $table);

                $count++;
                $this->info("You survived");

            }
        } 

        $this->info("bullet in a gun: {$random}");
        $this->info("player was killed, from chamber
        : {$random2}");

        $this->info("Died Statistic: {$diedStats}");
        $this->info("Survive Statistic: {$surviveStats}");

        $this->info("Bad Numbers, how many times was died :");


        foreach ($bad_numbers as $key => $count) {
            $table2[] = [$key, $count];
        }


        $this->table(['bad nr.', 'dad times'], $table2);

    }
    
}