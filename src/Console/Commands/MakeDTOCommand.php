<?php

namespace Zanixdev\LaravelHelpers\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeDTOCommand extends GeneratorCommand
{
    protected $signature = 'make:dto {name}';

    protected $description = 'Create a new DTO';

    protected $type = 'DTO';

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\DTO';
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath('/../../stubs/dto.stub');
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }
}