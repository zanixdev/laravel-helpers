<?php

namespace Zanixdev\LaravelHelpers\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeEnumCommand extends GeneratorCommand
{
    protected $signature = 'make:enum {name}';

    protected $description = 'Create a new enum';

    protected $type = 'Enum';

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Enums';
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/../../stubs/enum.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }
}