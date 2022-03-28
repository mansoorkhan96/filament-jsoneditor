<?php

namespace InvadersXX\FilamentJsoneditor;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentJsoneditorServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-jsoneditor';

    /**
     * @var string[]
     */
    protected array $scripts = [
        'invaders-filament-jsoneditor' => __DIR__ . '/../dist/invaders/json-editor/jsoneditor.min.js',
    ];

    /**
     * @var string[]
     */
    protected array $styles = [
        'invaders-filament-jsoneditor' => __DIR__ . '/../dist/invaders/json-editor/jsoneditor.min.css',
    ];

    public function boot()
    {
        $this->bootLoaders();
    }

    protected function bootLoaders()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-jsoneditor');
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::$name)
            ->hasConfigFile()
            ->hasViews();
    }
}