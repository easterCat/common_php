<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/5
 * Time: 18:57
 */

namespace core;

class medoo extends \Medoo\Medoo{
    public function __construct(){
        $conf = \core\conf::all('medoo_config');
        parent::__construct($conf);
    }
}