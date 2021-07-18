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

        Gate::define('manage_karyawan', function($user){
            return $user->hasAnyPermission([
                'karyawan_show',
                'karyawan_create',
                'karyawan_update',
                'karyawan_delete'
            ]);
        });
        Gate::define('manage_suppliers', function($user){
            return $user->hasAnyPermission([
                'suppliers_show',
                'suppliers_create',
                'suppliers_update',
                'suppliers_delete'
            ]);
        });
        Gate::define('manage_barang', function($user){
            return $user->hasAnyPermission([
                'barang_show',
                'barang_create',
                'barang_update',
                'barang_delete'
            ]);
        });
        Gate::define('manage_roles', function($user){
            return $user->hasAnyPermission([
                'role_show',
                'role_create',
                'role_update',
                'role_delete'
            ]);
        });
        Gate::define('manage_users', function($user){
            return $user->hasAnyPermission([
                'user_show',
                'user_create',
                'user_update',
                'user_delete'
            ]);
        });
    }
}
