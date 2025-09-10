<?php

namespace Inmanturbo\Plugins;

use Inmanturbo\Plugins\Contracts\FeatureFlag;

class PluginFlags
{
    public const FALLBACK = 'default';

    public const ENV_KEY = 'PLUGINS';

    protected static array $options = [];

    protected static $booted = false;

    public static function all(): array
    {
        static::boot();

        return static::$options;
    }

    public static function boot(): void
    {
        if (static::$booted) {
            return;
        }

        if (count(static::$options)) {
            return;
        }

        static::loadOptions(config('plugins.options'));

        static::mergeEnv();

        static::$booted = true;
    }

    protected static function loadOptions(FeatureFlag ...$options)
    {
        foreach ($options as $option) {
            static::$options[$option->name()] = $option->envValue(static::FALLBACK);
        }
    }

    public static function mergeEnv()
    {
        if ($envFlags = env(static::ENV_KEY)) {
            preg_match_all('/--(\w+)(?:=([^\s]+))?/', $envFlags, $matches, PREG_SET_ORDER);

            foreach ($matches as $match) {
                $key = $match[1];
                $value = $match[2] ?? true;
                static::$options[$key] = $value;
            }
        }
    }

    public static function get(string $option, $fallback = null): mixed
    {
        static::boot();

        return static::$options[$option] ?? $fallback;
    }
}
