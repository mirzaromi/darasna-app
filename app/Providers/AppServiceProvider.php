<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot()
    {
        Gate::define('author', function(User $user){
            return $user->role === 'author' || $user->role === 'admin';
        });

        Gate::define('admin', function(User $user){
            return $user->role === 'admin';
        });

        Gate::define('onlyAuthor', function(User $user){
            return $user->role === 'author';
        });
    }
}
