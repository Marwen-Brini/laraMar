

# my first laravel package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marwen-brini/laramar.svg?style=flat-square)](https://packagist.org/packages/marwen-brini/laramar)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marwen-brini/laramar/run-tests?label=tests)](https://github.com/marwen-brini/laramar/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/marwen-brini/laramar/Check%20&%20fix%20styling?label=code%20style)](https://github.com/marwen-brini/laramar/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marwen-brini/laramar.svg?style=flat-square)](https://packagist.org/packages/marwen-brini/laramar)


## Installation

You can install the package via composer:

```bash
composer require marwen-brini/laramar
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laramar-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laramar-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laramar-views"
```

## Usage

```php
$laramar = new laraMar\Laramar();
echo $laramar->echoPhrase('Hello, laraMar!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marwen-Brini](https://github.com/Marwen-Brini)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
