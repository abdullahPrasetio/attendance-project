<?php

namespace App\Providers;


use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');
        $charts->register([
            \App\Charts\AttendanceChart::class
        ]);
    }
}
