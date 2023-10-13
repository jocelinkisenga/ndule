<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
        'App\Http\Interfaces\FilesInterface',
        'App\Http\Repositories\PhotoRepositorie',
        'App\Http\Repositories\SongRepositorie',
        'App\Http\Repositories\FileRepositorie',
        'App\Http\Repositories\HomeDatabaseRepositorie',
        'App\Http\Repositorie\CategorieRepositorie',
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
