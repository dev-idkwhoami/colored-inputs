# A Filament PHP plugin for customizable color inputs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dev-idkwhoami/colored-inputs.svg?style=flat-square)](https://packagist.org/packages/dev-idkwhoami/colored-inputs)
[![Total Downloads](https://img.shields.io/packagist/dt/dev-idkwhoami/colored-inputs.svg?style=flat-square)](https://packagist.org/packages/dev-idkwhoami/colored-inputs)

This package provides a ColoredInput field for color text values in [Filament PHP](https://github.com/filamentphp/filament).

## Installation

**NOTE** that this package is currently only compatible with Filament v3, and there are currently no plans to release a v2
compatible version.

You can install the package via composer:

```bash
composer require dev-idkwhoami/colored-inputs
```

If the assets aren't being loaded run:

```bash
php artisan filament:assets
```

## ColoredInput Field Usage

The following styles are available:

#### default
![Default Style](.github\images\defaultStyle.png)
#### square
![Default Style](.github\images\squareStyle.png)
#### circle
![Default Style](.github\images\circleStyle.png)
#### full
![Default Style](.github\images\fullStyle.png)

To **choose one** of the styles simply chain onto the field the respective method like this:

```php
ColoredInput::make('color')
    ->defaultStyle()
    ->squareStyle()
    ->circleStyle()
    ->fullStyle(),
```

Overview of available methods:

```php
ColoredInput::make('color')
    ->defaultStyle()
    ->squareStyle()
    ->circleStyle()
    ->fullStyle()
    ->theme('large') // default|large|polaroid|pill
    ->themeMode('dark') // dark|light|auto !NOTE - auto uses the browsers preferred mode NOT from Filament!
    ->options(RawJs::make(<<<'JS'
            { alpha: false }
        JS)),
```

`->options()` expects a `RawJS` object which will get rendered as a JS object.

```php
use DevIDKWHOAMI\ColoredInputs\Forms\Components\ColoredInput;

ColoredInput::make('color')
    ->squareStyle()
    ->options(RawJs::make(<<<'JS'
            { alpha: false }
        JS)),
```

The following options are used by the package and **shouldn't be supplied** in the options object as they are set by the package itself

```js
{
    themeMode, // is set by the package
    theme, // is set by the package
    el, // is internally set to the fields input
    defaultColor, // is set to the current state on init
    onChange // is used to update the state internally
}
```

Read more on how to customize your color picker here [Guide Customization](https://github.com/mdbassit/Coloris?tab=readme-ov-file#customizing-the-color-picker)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [dev-idkwhoami](https://github.com/dev-idkwhoami)
- [All Contributors](../../contributors)

This package is based on the JavaScript library [coloris](https://coloris.js.org/).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
