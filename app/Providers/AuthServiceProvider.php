<?php

namespace App\Providers;

use App\Policies\AccountPolicy;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        $this->registerAccountPolicies();

        // This method will register the routes necessary to issue access tokens and revoke access tokens, clients, and personal access tokens:
        Passport::routes();

    }

    public function registerAccountPolicies() {
        Gate::define('account-create', function($user) {
            return $user->hasAccess(['account-create']);
        });

        Gate::define('account-view', function($user) {
            return $user->hasAccess(['account-view']);
        });

        Gate::define('account-update', function($user) {
            return $user->hasAccess(['account-update']);
        });

        Gate::define('account-delete', function($user) {
            return $user->hasAccess(['account-delete']);
        });
    }

}
