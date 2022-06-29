<?php

namespace Karacraft\UtilityCommands;

use Illuminate\Support\ServiceProvider;
use Karacraft\UtilityCommands\Console\MakeView;
use Karacraft\UtilityCommands\Console\MakeTrait;
use Karacraft\UtilityCommands\Console\MakeAction;
use Karacraft\UtilityCommands\Console\TestCommand;

class UtilityCommandsServiceProvider extends ServiceProvider
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
        if($this->app->runningInConsole())
        {
            $this->commands([
                TestCommand::class,
                MakeAction::class,
                MakeTrait::class,
                MakeView::class,
            ]);
        }
    }
}
