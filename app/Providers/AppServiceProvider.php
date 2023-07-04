<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Gate::define('admin', function(User $user){
            return $user->username === 'admin';
        });
        Gate::define('user', function(User $user){
            return $user->username !== 'admin';
        });
        Blade::directive('money', function ($amount) {
            return "<?php echo 'Rp'.number_format($amount, 0 , '.' , '.'); ?>";
        });
    }
}
