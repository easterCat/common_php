<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/3
 * Time: 21:08
 */

namespace core;

class route
{
    public $ctrl;
    public $action;
    public $params = array();

    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取url中的控制器和方法
         * 3.获取url中参数
         */

        $this->ctrl = \core\conf::get('CTRL', 'route_config');
        $this->action = \core\conf::get('ACTION', 'route_config');

        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {

            $path = $_SERVER['REQUEST_URI'];
            $arr = explode('/', trim($path . '/'));
            $path_arr = array_filter($arr, function ($v, $k) {
                return $v != "";
            }, ARRAY_FILTER_USE_BOTH);
            $path_arr = array_values($path_arr);

            if (isset($path_arr[0])) {

                if ($path_arr[0] != 'add.php') {
                    $this->ctrl = $path_arr[0];

                    if (isset($path_arr[1])) {
                        $this->action = $path_arr[1];
                    } else {
                        $this->action = 'index';
                    }

                    $count = count($path_arr);

                    $i = 2;
                    while ($i < $count) {
                        $this->params[$path_arr[$i]] = $path_arr[$i + 1];
                        $i = $i + 2;
                    }

                } else {
                    if (isset($path_arr[1])) {
                        $this->ctrl = $path_arr[1];
                    }

                    if (isset($path_arr[2])) {
                        $this->action = $path_arr[2];
                    } else {
                        $this->action = 'index';
                    }

                    $count = count($path_arr);
                    $i = 3;
                    while ($i < $count) {
                        $this->params[$path_arr[$i]] = $path_arr[$i + 1];
                        $i = $i + 2;
                    }
                }
            } else {
                $this->ctrl = 'index';
                $this->action = 'index';
            }
        } else {
            $this->ctrl = 'index';
            $this->action = 'index';
        }

        welcome($this->params);
    }
}