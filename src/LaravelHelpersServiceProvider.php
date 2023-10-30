<?php

namespace Zanixdev\LaravelHelpers;

use Illuminate\Support\ServiceProvider;
use Zanixdev\LaravelHelpers\Console\Commands\MakeEnumCommand;
use Zanixdev\LaravelHelpers\Console\Commands\MakeServiceCommand;

class LaravelHelpersServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeServiceCommand::class,
                MakeEnumCommand::class,
            ]);
        }
    }
}