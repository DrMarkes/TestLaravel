<?php

namespace App\Providers;

use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('add-article', function (User $user) {
            $user->roles();

            foreach ($user->roles as $role) {
                if ($role->name == 'Admin') {
                    return true;
                }
            }

            return false;
        });

        Gate::define('update-article', function (User $user, $article) {
            foreach ($user->roles as $role) {
                if ($role->name == 'Admin') {
                    if ($user->id == $article->user_id) {
                        return true;
                    }
                }
            }

            return false;
        });
    }
}
