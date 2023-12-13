<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot(): void
    {
        Gate::define('admin', function($user) {

            return $user->role_id == '1' || $user->name == 'AdminSam';

        });

        Gate::define('create', function($user) {

            return $user->role_id == '1' || $user->role_id == '2' || $user->name == 'AdminSam';

        });

        Gate::define('edit', function($user) {

            return $user->role_id == '1' || $user->role_id == '2' || $user->name == 'AdminSam';

        });


        Gate::define('delete', function($user) {

            return $user->role_id == '1' || $user->name == 'AdminSam';

        });
    }
}
