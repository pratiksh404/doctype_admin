<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeTraitCommand extends GeneratorCommand
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'make:trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to generate traits';

    /**
     *
     * Type of class being generated
     *
     * @var string
    */
    protected $type = 'trait';

    /**
     * Get stub file for the generator
     *
     * @return string
     */
     protected  function getStub()
     {
         return __DIR__. '/stubs/trait.stub';
     }

    /**
     *
     * Get default namespace for trait
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Traits';
    }
}
