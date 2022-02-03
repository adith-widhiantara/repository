<?php

namespace Adithwidhiantara\Repository;

use Illuminate\Support\ServiceProvider;
use Adithwidhiantara\Repository\Console\InstallServiceClass;
use Adithwidhiantara\Repository\Console\InstallRepositoryClass;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $commands = [
        InstallServiceClass::class,
        InstallRepositoryClass::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
