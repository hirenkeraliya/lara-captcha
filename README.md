# lara-captcha

# Laravel Captcha (Laravel 9.x)
Laravel captcha to helps you to stop bots form submission and provide a bit security to your public forms.

## Requirements
| PHP    | Laravel | Package |
|--------|---------|---------|
| 8.1+   | 9.x     | v1.0.0  |

## Installation

1) Install the package by running this command in your terminal/cmd:
```
composer require hirenkeraliya/lara-captcha
```

2) You can import config file by running this command in your terminal/cmd
```
php artisan vendor:publish --tag=lara-captcha-config
```

3) Add `@captcha` in your form after the csrf token.

4) your public route needs to use this middleware `\Hirenkeraliya\LaraCaptcha\app\Http\Middleware\VerifyCaptcha`

That's it.


## Authors

* [**Hiren Keraliya**](https://github.com/hirenkeraliya) - *Initial work*

See also the list of [contributors](https://github.com/hirenkeraliya/lara-captcha/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Special Thanks to

* [Laravel](https://laravel.com) Community