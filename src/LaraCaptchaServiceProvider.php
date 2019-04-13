<?php

namespace Freshbitsweb\LaraCaptcha;

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

        Blade::include('lara_captcha::lara_captcha', 'captcha');
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        //
    }
}
