<?php

namespace Inmanturbo\Plugins;

use Inmanturbo\Plugins\Commands\PluginsCommand;
use Laravel\Pennant\Feature;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PluginsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('plugins')
            ->hasConfigFile()
            ->hasCommand(PluginsCommand::class);
    }

    public function packageBooted()
    {
        foreach (config('plugins.enabled') as $pluginName => $pluginValue) {
            Feature::driver('array')->define($pluginName, function (mixed $scope) use ($pluginValue, $pluginName) {
                return FeatureRegistry::resolve($scope, $pluginName, config('plugins.resolvers.'.$pluginName, $pluginValue));
            });
        }
    }
}
