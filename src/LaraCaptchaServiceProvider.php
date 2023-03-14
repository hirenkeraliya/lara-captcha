<?php

namespace Hirenkeraliya\LaraCaptcha;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaraCaptchaServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'lara_captcha');

        $this->publishes([
            __DIR__ . '/config/lara_captcha.php' => config_path('lara_captcha.php'),
        ], 'lara-captcha-config');

        Blade::include('lara_captcha::lara_captcha', 'captcha');
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $httpKernel = $this->app->make(\Illuminate\Contracts\Http\Kernel::class);

        // Users can specify only the options they actually want to override
        $this->mergeConfigFrom(
            __DIR__.'/config/lara_captcha.php',
            'lara_captcha'
        );
    }
}
