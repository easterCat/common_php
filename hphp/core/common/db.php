<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/4
 * Time: 14:00
 */

namespace core\common;

class db extends \PDO
{
    public function __construct()
    {
        $conf = \core\conf::all('db_config');
        $dsn = $conf['DSN'];
        $username = $conf['USER'];
        $passwd = $conf['PASSWD'];

        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}