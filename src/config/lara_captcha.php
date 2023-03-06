<?php

return [
    'enabled' => env('LARA_CAPTCHA_ENABLED', true),

    'input_name' => 'captcha',

    'error' => [
        'message' => 'Captcha not valid.',

        'status_code' => 403,
    ]

];
