<?php

namespace Zanixdev\LaravelHelpers\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeInterfaceCommand extends GeneratorCommand
{
    protected $signature = 'make:interface {name}';

    protected $description = 'Create a new interface';

    protected $type = 'Interface';

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Interfaces';
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/../../stubs/interface.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }
}