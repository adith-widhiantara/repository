<?php

namespace Adithwidhiantara\Repository\Console;

use Illuminate\Console\GeneratorCommand;

/**
 * To create service class.
 *
 * @author Adith Widhiantara <adityaswidhiantara@gmail.com>
 */
class InstallServiceClass extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'maker:service';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'maker:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Laravel service class';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../Stubs/service.stub';
    }
}
