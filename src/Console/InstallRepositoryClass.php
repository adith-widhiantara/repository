<?php

namespace Adithwidhiantara\Repository\Console;

use Illuminate\Console\GeneratorCommand;

/**
 * To create repository class.
 *
 * @author Adith Widhiantara <adityaswidhiantara@gmail.com>
 */
class InstallRepositoryClass extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'maker:repository';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'maker:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Laravel repository class';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../Stubs/repository.stub';
    }
}
