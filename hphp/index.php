<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/3
 * Time: 20:34
 */

define('VKPHP', realpath('./'));
define('CORE', VKPHP . './core');
define('APP', VKPHP . './app');
define('LIB', VKPHP . './vendor');
define('CONFIG', VKPHP . './config');
define('LOG', VKPHP . './log');
define('DEBUG', true);

include LIB . '/autoload.php'; //自动加载第三方库

if (DEBUG) {
    ini_set('display_errors', 'On');
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
} else {
    ini_set('display_errors', 'Off');
}

require CORE . '/common/function.php';
require CORE . '/vk.php';
\core\vk::run();


require CORE . '/autoload.php';
spl_autoload_register('\core\autoload::load');
$route = new \core\route();

$ctrl = $route->ctrl;
$action = $route->action;
$params = $route->params;

$ctrl_file = APP . '/ctrl/' . $ctrl . 'Ctrl.php';
$ctrl_class = '\\app\\ctrl\\' . $ctrl . 'Ctrl';

if (is_file($ctrl_file)) {
    include $ctrl_file;
    $ctrl_obj = new $ctrl_class;
    $ctrl_obj->$action();
} else {
    throw new \Exception('找不到控制器', $ctrl_file);
}




