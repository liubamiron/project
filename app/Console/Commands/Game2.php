<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;

class Game2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game2';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'russian roulette';
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
    }
}
