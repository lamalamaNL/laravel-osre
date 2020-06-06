<?php

namespace LamaLama\Osre;

use Illuminate\Support\ServiceProvider;
use LamaLama\Osre\Osre;

class OsreServiceProvider extends ServiceProvider
{
    /**
     * Boot.
     */
    public function boot()
    {
        $this->registerPublishables();
    }

    /**
     * Register.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/osre.php', 'osre');

        $this->app->bind('osre', function () {
            return new Osre();
        });
    }

    /**
     * registerPublishables.
     */
    protected function registerPublishables(): void
    {
        $this->publishes([
            __DIR__.'/../config/osre.php' => config_path('osre.php'),
        ], 'config');
    }
}
