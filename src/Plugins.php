<?php

namespace Inmanturbo\Plugins;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inmanturbo\Plugins\Plugins
 */
class Plugins extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Inmanturbo\Plugins\PluginManager::class;
    }
}
