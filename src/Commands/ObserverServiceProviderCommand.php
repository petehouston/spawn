<?php namespace Petehouston\Spawn\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class ObserverCServiceProviderCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'spawn:observer:provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create ObserverServiceProvider class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Provider';

    /**
     * Parse the name and format according to the root namespace.
     *
     * @param  string $name
     * @return string
     */
    protected function parseName($name)
    {
        return 'ObserverServiceProvider';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../stubs/observerserviceprovider.stub';
    }

    /**
     * Get the destination class path.
     *
     * @param  string $name
     * @return string
     */
    protected function getPath($name)
    {
        return './app/Providers/ObserverServiceProvider.php';
    }
}