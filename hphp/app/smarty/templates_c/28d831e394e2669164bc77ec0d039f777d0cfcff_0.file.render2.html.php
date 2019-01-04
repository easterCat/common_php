<?php
/* Smarty version 3.1.33, created on 2019-01-04 10:07:40
  from 'D:\myProjects\easter_php\hphp.\app\smarty\templates\index\render2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f306c297420_99096357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d831e394e2669164bc77ec0d039f777d0cfcff' => 
    array (
      0 => 'D:\\myProjects\\easter_php\\hphp.\\app\\smarty\\templates\\index\\render2.html',
      1 => 1546594067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f306c297420_99096357 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smarty</title>
</head>
<body>
<p>第一个Smarty页面</p>
<p>用户名：<?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</p>
</body>
</html><?php }
}
