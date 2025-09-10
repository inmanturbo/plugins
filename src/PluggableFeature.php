<?php

namespace Inmanturbo\Plugins;

use BackedEnum;

abstract class PluggableFeature
{
    abstract public static function feature(): string|BackedEnum;

    public static function getDriver()
    {
        $feature = static::feature();

        return Plugins::driver(match (true) {
            $feature instanceof BackedEnum => $feature->value,
            default => $feature,
        });
    }

    /**
     * Dynamically call the default driver instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return static::getDriver()->$method(...$parameters);
    }
}
