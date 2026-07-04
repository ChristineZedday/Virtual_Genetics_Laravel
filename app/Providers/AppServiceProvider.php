<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       if ($this->app->environment('local')) {
        $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        $this->app->register(TelescopeServiceProvider::class);
    }
    }


   /* static function App::singleton('date_mois', function(){
     return DB::table('gamedatas')->where('id', '1')->first()->date_courante;
}); /*

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //Model::preventLazyLoading(! $this->app->isProduction());
    }
}
