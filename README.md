# This is my package plugins

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inmanturbo/plugins.svg?style=flat-square)](https://packagist.org/packages/inmanturbo/plugins)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/inmanturbo/plugins/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/inmanturbo/plugins/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/inmanturbo/plugins/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/inmanturbo/plugins/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/inmanturbo/plugins.svg?style=flat-square)](https://packagist.org/packages/inmanturbo/plugins)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require inmanturbo/plugins
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="plugins-config"
```

This is the contents of the published config file:

```php
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
    ]
];

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [inmanturbo](https://github.com/inmanturbo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
