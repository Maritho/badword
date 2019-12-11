<?php

namespace Maritho\Badword;

use Illuminate\Support\ServiceProvider;

class BadwordServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/badword.php' => config_path('badword.php'),
        ]);

        $this->publishes([
            __DIR__.'/database/seeds/B' => config_path('badword.php'),
        ]);
    }
}
