<?php

namespace App\Providers;

use Carbon\Carbon; 
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\CitcuitController; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $citcuit = new CitcuitController();

            $view->with('global_setting', [
                'auto_refresh' => $citcuit->parseSetting('auto_refresh'),
                'theme' => $citcuit->parseSetting('theme'),
            ]);

            $view->with('global_time', Carbon::now($citcuit->parseSetting('timezone'))->format('H:i'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}