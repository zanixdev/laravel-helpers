<?php

namespace Zanixdev\LaravelHelpers\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeServiceCommand extends GeneratorCommand
{
    protected $signature = 'make:service {name}';

    protected $description = 'Create a new service class';

    protected $type = 'Service';

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Services';
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/../../stubs/service.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }
}