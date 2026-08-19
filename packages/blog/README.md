<div align="center">
    <h1>Blog</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/kevin-pfiffer/blog"><img src="https://img.shields.io/packagist/v/kevin-pfiffer/blog.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/kevin-pfiffer/blog"><img src="https://img.shields.io/packagist/php-v/kevin-pfiffer/blog.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/kevin-pfiffer/blog"><img src="https://badge.laravel.cloud/badge/kevin-pfiffer/blog?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/kevin-pfiffer/blog/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/kevin-pfiffer/blog/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/kevin-pfiffer/blog"><img src="https://img.shields.io/packagist/dt/kevin-pfiffer/blog.svg?style=flat-square" alt="Total Downloads"></a>
</p>



## Installation

You can install the package via Composer:

```bash
composer require kevin-pfiffer/blog
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="blog"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="blog-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="blog-migrations"
php artisan migrate
```

### Publishing the Views

```bash
php artisan vendor:publish --tag="blog-views"
```

### Publishing the Translations

```bash
php artisan vendor:publish --tag="blog-lang"
```

### Publishing the Public Assets

```bash
php artisan vendor:publish --tag="blog-assets"
```

## Usage

<!-- Add a basic usage example here. -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Blog! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Kevin Pfiffer](https://github.com/kevin-pfiffer)
- [All Contributors](../../contributors)

## License

Blog is open-sourced software licensed under the [MIT license](LICENSE.md).
