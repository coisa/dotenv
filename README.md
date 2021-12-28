# CoiSA Dotenv

[![PHP Version][ico-php]][link-packagist]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Total Downloads][ico-downloads]][link-downloads]

## Install

If you want always load the `.env` file in your project, run the following command:

```sh
$ composer require coisa/dotenv
```

If you just want to load the `.env` file in your project only for development, run the following command:

```sh
$ composer require --dev coisa/dotenv
```

Since this library uses the `symfony/dotenv` package, all the following files will be loaded:

- `.env`
- `.env.dist`
- `.env.local`
- `.env.$APP_ENV`
- `.env.$APP_ENV.local`

The `.env` files must be in the root of your project.

## Credits

- [Felipe Sayão Lobato Abreu][link-author]

## License

Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/coisa/dotenv.svg?style=flat-square
[ico-php]: https://img.shields.io/packagist/php-v/coisa/dotenv.svg?style=flat-square
[ico-license]: https://img.shields.io/github/license/coisa/dotenv.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/coisa/dotenv.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/coisa/dotenv
[link-downloads]: https://packagist.org/packages/coisa/dotenv
[link-author]: https://github.com/coisa
