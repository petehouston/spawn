<?php namespace Petehouston\Spawn;

use Illuminate\Support\ServiceProvider;

class SpawnServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSeed();
        $this->registerObserver();

    }

    /**
     * Register the make:seed generator.
     */
    private function registerSeed()
    {
        $this->app->singleton('command.spawn.seed', function ($app) {
            return $app['Petehouston\Spawn\Commands\SeedCommand'];
        });
        $this->commands('command.spawn.seed');
    }

    private function registerObserver()
    {
        $this->app->singleton('command.spawn.observer', function ($app) {
            return $app['Petehouston\Spawn\Commands\ObserverCommand'];
        });
        $this->commands('command.spawn.observer');
    }

}