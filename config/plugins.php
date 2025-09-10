<?php

// config for Inmanturbo/Plugins

use Inmanturbo\Plugins\PluginFlags;

return [
    'default' => $fallback = PluginFlags::FALLBACK,

    'options' => [
        // 'layout' => env('LAYOUT_PLUGIN'),
    ],

    'enabled' => [
        // 'layout' => PluginFlags::get('layout', $fallback),
    ],

    'resolvers' => [
        //
    ],
];
