<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/6
 * Time: 15:49
 */

require './socket.php';

$url = 'https://api.bilibili.com/x/v2/reply/add';

$http = new Http($url);

$http->setHeader('Accept:application/json, text/javascript, */*; q=0.01');
$http->setHeader('Accept-Encoding:gzip, deflate, br');
$http->setHeader('Accept-Language:zh-CN,zh;q=0.9');
$http->setHeader('Connection:keep-alive');

$http->setHeader('Cookie:LIVE_BUVID=AUTO3915443367808364; sid=cnib74gs; DedeUserID=4132416; DedeUserID__ckMd5=5ee126ea7781aa72; SESSDATA=cf9bf638%2C1546928823%2Cfc4bcec1; bili_jct=36d00a230dcbd9818304f63c40cd1287; UM_distinctid=16791a6caa8729-0b14acda50efd2-33504275-1fa400-16791a6caa9a3f; CURRENT_FNVAL=16; buvid3=020B373C-97A4-4FCA-B8EA-3EEED06368A7155652infoc; rpdid=wdosppkkxlpw; fts=1544875242; stardustvideo=2; CURRENT_QUALITY=32; _dfcaptcha=dda8b7cfce1aa55379516fc1c3096c35; BANGUMI_SS_26301_REC=259915');

$http->setHeader('Origin:https://www.bilibili.com');
$http->setHeader('Referer:https://www.bilibili.com/video/av28681865/?p=5&t=508');
$http->setHeader('User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.26 Safari/537.36 Core/1.63.6788.400 QQBrowser/10.3.2843.400');

$data = array(
    'oid' => '28681865',
    'type' => '1',
    'message' => '不错222',
    'plat' => '1',
    'jsonp' => 'jsonp',
    'csrf' => '36d00a230dcbd9818304f63c40cd1287'
);

$http->post($data);
