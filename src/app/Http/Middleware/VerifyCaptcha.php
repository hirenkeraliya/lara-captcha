<?php

namespace Hirenkeraliya\LaraCaptcha\app\Http\Middleware;

use Closure;

class VerifyCaptcha
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('GET')) {
            return $next($request);
        }

        if (config('lara_captcha.enabled') === false) {
            return $next($request);
        }

        $inputName = 'custom_' . config('lara_captcha.input_name');

        if ($request->get($inputName)[$request->get('_token')]) {
            abort(config('lara_captcha.error.status_code'), config('lara_captcha.error.message'));
        }

        return $next($request);
    }
}
