<?php

namespace App\Providers;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-admin', function ($user) {
            return $user->hasAnyRole('Admin');
         });

         Gate::define('is-coordinator', function ($user) {
            return $user->hasAnyRole('Coordinator');
         });

         Gate::define('is-supervisor', function ($user) {
            return $user->hasAnyRole('Supervisor');
         });
         
         Gate::define('is-student', function ($user) {
             return $user->hasAnyRoles('Student');
         });

         Gate::define('AdminCoordinator', function ($user) {
             return $user->hasRoles(['Admin', 'Coordinator']);
         });
    }
}
