<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/3
 * Time: 20:34
 */

define('VKPHP', realpath('./'));
define('CORE', VKPHP . './core');
define('APP', VKPHP . './APP');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

require CORE . '/common/function.php';
require CORE . '/vk.php';
\core\vk::run();


require CORE . '/autoload.php';
spl_autoload_register('\core\autoload::load');
$route = new \core\route();




