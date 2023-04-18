<?php

namespace App\Providers;

use App\Models\Rubric;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
//        DB::listen(function ($query){
//            dump($query->sql);
//        });

        view()->composer('layouts.footer', function ($view){
            $view->with('rubrics', Rubric::all());
        });
    }
}
