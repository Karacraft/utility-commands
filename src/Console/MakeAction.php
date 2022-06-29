<?php

namespace Karacraft\UtilityCommands\Console;

use Illuminate\Console\GeneratorCommand;

class MakeAction extends GeneratorCommand
{
    protected $signature = 'make:action {name}';

    protected $description = 'Create an action in App\Action';

    protected $type = 'Action';

    protected function getStub()
    {
        return __DIR__ . '/stubs/MakeAction.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Actions';
    }

    public function handle()
    {
        parent::handle();

        // $this->doOtherOperations();
    }


    protected function replaceClass($stub, $name){
        $class = str_replace($this->getNamespace($name).'\\', '', $name);

        return str_replace('{{class_name}}', $class, $stub);
    }

    protected function doOtherOperations()
    {
        // Get the fully qualified class name (FQN)
        // $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        // $path = $this->getPath($class);

        // $content = file_get_contents($path);

        // Update the file content with additional data (regular expressions)

        // file_put_contents($path, $content);
    }
}