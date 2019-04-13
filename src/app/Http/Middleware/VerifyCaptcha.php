<?php

namespace Freshbitsweb\LaraCaptcha\app\Http\Middleware;

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

        $inputName = 'custom_' . config('lara_captcha.key');

        if ($request->get($inputName)[$request->get('_token')]) {
            abort(config('lara_captcha.error.status_code'), config('lara_captcha.error.message'));
        }

        return $next($request);
    }
}