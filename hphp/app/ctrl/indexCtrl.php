<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/4
 * Time: 13:49
 */

namespace app\ctrl;
$render_file = CORE . '/render.php';
include $render_file;

class indexCtrl extends \core\render
{
    // 其他

    public function render2()
    {

        $this->smarty->assign('username', 'voidking');
        $this->smarty->display('index/render2.html');
    }

    public function log()
    {
        $log = new \core\log();
        $log->log('this is log', 'log_test');
        echo 'success';
    }

    public function data()
    {
        $db = new \core\common\db();
        $sql = 'select * from vk_user';
        $result = $db->query($sql);
        dump($result);
        dump($result->fetchAll());
    }

    public function medoo()
    {
        $medoo = new \core\medoo();
        dump($medoo);
    }
}
