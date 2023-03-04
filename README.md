# lara-captcha

# Laravel Captcha (Laravel 9.x)
Lara-Captcha is a Laravel package that provides an effective way to prevent bot submissions and enhance the security of public forms.

## Requirements
| PHP    | Laravel | Package |
|--------|---------|---------|
| 8.1+   | 9.x     | v1.0.0  |

## Installation

Follow these steps to install the package:

1) Run the following command in your terminal/cmd:
```php
composer require hirenkeraliya/lara-captcha
```

2) Import the configuration file by running this command in your terminal/cmd:
```php
php artisan vendor:publish --tag=lara-captcha-config
```

3) Add `@captcha` in your form after the CSRF token.

4) To use the middleware, add the following line to your route:
  ```php
  ->middleware(\Hirenkeraliya\LaraCaptcha\app\Http\Middleware\VerifyCaptcha::class)
  ```

That's it! Your form is now secured against bot submissions.


## Authors

* [**Hiren Keraliya**](https://github.com/hirenkeraliya) - *Initial work*

See the [list of contributors](https://github.com/hirenkeraliya/lara-captcha/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Special Thanks to

*  Special thanks to the [Laravel](https://laravel.com) community for their support
