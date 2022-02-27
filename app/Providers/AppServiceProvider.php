<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\RequestActivityLoggerInterface;
use App\Services\ProductionRequestActivityLogger;
use App\Services\DebugRequestActivityLogger;
use App\Services\DummyRequestActivityLogger;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //   $this->app->bind(RequestActivityLoggerInterface:: class, function(){
        //   return $this->app->make(DummyRequestActivityLogger::class);
        


    // $this->app->bind(RequestActivityLoggerInterface::class, DummyRequestActivityLogger::class);

    
    
    $this->app->bind(RequestActivityLoggerInterface:: class, function(){

    if (config('app.env')==='production')  { 
        
     return   $this->app->make(ProductionRequestActivityLogger::class);
       }

       else   {
        return $this->app->make(DebugRequestActivityLogger::class);
       }   
        
    });

}

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        //Paginator::defaultView('my-paginator');

    }
}
