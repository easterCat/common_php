<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.163.com'),
    'port' => env('MAIL_PORT', 465),
    'from' => ['address' => 'fuhuodemao@163.com', 'name' => '发件人'],
    'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -t',
    'pretend' => env('MAIL_PRETEND', false),
];
