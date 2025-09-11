<?php

namespace Inmanturbo\Plugins;

use BackedEnum;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Manager;
use Laravel\Pennant\Feature as Pennant;

class PluginManager extends Manager
{
    public function getDefaultDriver()
    {
        return config('plugins.default');
    }

    /**
     * Get a driver instance.
     *
     * @param  string|null|BackedEnum  $driver
     *
     * @throws \InvalidArgumentException
     */
    public function driver($driver = null)
    {
        $plugin = Pennant::driver('array')->value(match (true) {
            $driver instanceof BackedEnum => $driver->value,
            default => $driver,
        });

        return parent::driver($plugin);
    }
}
