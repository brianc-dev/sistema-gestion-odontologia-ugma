<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Historia;
use App\Models\User;
use App\Policies\HistoriaPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Historia::class => HistoriaPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin-access', function (User $user) {
            if ($user->role_id == 0) {
                return Response::allow();
            }
            return Response::deny('Solo personal autorizado.');
        });

    }
}
