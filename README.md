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

4) Add below code in your `app/Http/Kernel.php` `$routeMiddleware`'s list.
```
'captcha' => \Hirenkeraliya\LaraCaptcha\app\Http\Middleware\VerifyCaptcha::class,
```

5) your public route needs to use this middleware `->middleware('captcha')`