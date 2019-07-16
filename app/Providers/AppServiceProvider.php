<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GetNextQuestionnaire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //mencari questioner selanjutnya
        $this->app->bind('GetNextQuestionnaire', function(){
            return new GetNextQuestionnaire;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
