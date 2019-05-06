<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Mail;

ini_set('max_execution_time', 180);

class MailController extends Controller
{
    public function send()
    {
        Mail::raw('你好，我是PHP程序！', function ($message) {
            $to = '792751238@qq.com';
            $message->to($to)->subject('纯文本信息邮件测试');
        });
    }
}