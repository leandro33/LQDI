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
        // UserRepository Eloquent
        $this->app->bind(
            'App\Repositories\Contracts\RepositoryInterface', 
            'App\Repositories\UserRepository'
        );

        // UserRepository Outro ORM
        // $this->app->bind(
        //     'App\Repositories\Contracts\UserRepositoryInterface', 
        //     'App\Repositories\UserRepositoryOutroORM'
        // );
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
