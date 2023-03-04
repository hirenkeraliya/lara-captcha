# lara-captcha

# Laravel Captcha (Laravel 9.x)
Lara-Captcha is a Laravel package that provides an effective way to prevent bot submissions and enhance the security of public forms.

## Requirements
| PHP    | Laravel | Package |
|--------|---------|---------|
| 8.1+   | 9.x     | v1.0.0  |

## Features
- Easy integration with Laravel forms
- Supports multiple configurations for customization
- Provides effective protection against bot submissions
- Minimal code changes required for implementation
- Regular updates and bug fixes from the author
- Lightweight package for efficient performance

## Usage
  Here's an example of how to use Lara-Captcha in your Laravel form:

  ```php
    <form method="POST" action="/submit-form">
      @csrf
      @captcha

      <input type="text" name="name" placeholder="Name"><br>
      <input type="email" name="email" placeholder="Email"><br>
      <button type="submit">Submit</button>
    </form>
  ```

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
  use Hirenkeraliya\LaraCaptcha\app\Http\Middleware\VerifyCaptcha;

  ->middleware(VerifyCaptcha::class)
  ```

That's it! Your form is now secured against bot submissions.

## Configuration
Lara-Captcha provides multiple configuration options that you can modify to fit your needs. The default configuration can be found in the `config/lara-captcha.php` file after running the vendor:publish command.

You can modify the following configuration options:

- `error.message`: The error message to display when a bot submission is detected
- `error.status_code`: The error status code to display when a bot submission is detected
- `input_name`: The name of the input field in your form

## Conclusion
Lara-Captcha is a reliable and easy-to-use package for preventing bot submissions and enhancing the security of public forms in Laravel. With its simple integration and multiple customization options, it's a great choice for developers looking to improve the safety of their forms.
## Authors

* [**Hiren Keraliya**](https://github.com/hirenkeraliya) - *Initial work*

## Support
If you encounter any issues with Lara-Captcha or have suggestions for improvement, feel free to open an issue on the [GitHub repository](https://github.com/hirenkeraliya/lara-captcha/issues).

## Contributing
Contributions to Lara-Captcha are always welcome! To contribute, simply fork the repository, make your changes, and submit a pull request.


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Special Thanks to

Special thanks to the [Laravel](https://laravel.com) community for their support
