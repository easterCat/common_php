<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/5
 * Time: 22:00
 */

/*
php + socket 发送http请求

模拟下载,登录,注册
*/

interface proto
{
    function conn($url);

    function get();

    function post();

    function close();
}

class Http implements Proto
{
    const CRLF = "\r\n";

    protected $errno = -1;
    protected $errstr = '';

    protected $line = array();
    protected $header = array();
    protected $body = array();
    protected $url = null;
    protected $fh = null;
    protected $version = 'HTTP/1.1';

    protected $response = null;

    public function __construct($url)
    {
        $this->conn($url);
        $this->setHeader('Host:' . $this->url['host']);
    }

    //请求行
    protected function setLine($method)
    {
        $this->line[0] = $method . ' ' . $this->url['path'] . ' ' . $this->version;
    }

    //头信息
    public function setHeader($header_line)
    {
        $this->header[] = $header_line;
    }

    //主体信息
    protected function setBody($body)
    {
        $this->body[] = http_build_query($body);
    }

    public function conn($url)
    {
        $this->url = parse_url($url);

        //判断端口
        if (!isset($this->url['port'])) {
            $this->url['port'] = '80';
        }
//        $this->fh = fsockopen($this->url['host'], $this->url['port'], $this->errno, $this->errstr, 3);
        $this->fh = fsockopen($this->url['host'], $this->url['port']);
        var_dump($this->fh);
    }

    public function get()
    {
        $this->setLine('GET');
        $this->request();
        return $this->response;
    }

    public function post($body = array())
    {
        $this->setLine('POST');

        //设置content-type
        $this->setHeader('Content-type:application/x-www-form-urlencoded');  //构造主体信息,与get不同的地方

        $this->setBody($body);

        //计算content-length
        $this->setHeader('Content-length:' . strlen($this->body[0]));

        $this->request();
    }

    public function request()
    {

        try {
            //把请求行,头信息,请求信息拼接
            $req = array_merge($this->line, $this->header, array(' '), $this->body, array(' '));
            $req = implode(self::CRLF, $req);
            print_r($req);

            fwrite($this->fh, $req);

            //while (!feof($this->fh)) {
            //    $this->response .= fread($this->fh, 1024);
            //}

            while (!feof($this->fh)) {
                echo fgets($this->fh, 1024);
            }

            $this->close();
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }

    public function close()
    {
        fclose($this->fh);
        return $this->response;
    }
}


//$url = 'https://www.bilibili.com/';
//$http = new Http($url);
//echo $http->get();
//echo $http->post(array('title' => '美女', 'content' => '这是一个美女'));

