<?php

namespace TenderSrl\BugsnagDeployerRecipe;

use Bugsnag\BugsnagLaravel\Commands\DeployCommand;
use Illuminate\Support\ServiceProvider;

class BugsnagDeployerRecipeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    protected function registerCommands(): void
    {
        $this->app->singleton('command.bugsnag:deploy', function () {
            return new DeployCommand();
        });

        $this->commands([
            'command.bugsnag:deploy',
        ]);
    }
}
