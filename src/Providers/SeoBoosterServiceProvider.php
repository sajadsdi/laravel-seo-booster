<?php

namespace Sajadsdi\LaravelSeoBooster\Providers;

use Illuminate\Support\ServiceProvider;
use Sajadsdi\LaravelSeoBooster\Console\PublishCommand;
use Sajadsdi\LaravelSeoBooster\Seo;


class SeoBoosterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Seo::class);
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->configurePublishing();
            $this->registerCommands();
        }
    }

    private function registerCommands()
    {
        $this->commands([
            PublishCommand::class
        ]);
    }

    private function configurePublishing()
    {
        $this->publishes([__DIR__ . '/../../config/seo.php' => config_path('seo.php')], 'laravel-seo-booster-configure');
    }
}
