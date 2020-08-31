<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 10:56:27
  from 'D:\software\wampserver\www\server\mvc-test\application\template\index\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a345b8ca282_79609192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03db7b32b99d69f9ce0f3578ade5f0674ad6a503' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\index\\show.html',
      1 => 1598695903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a345b8ca282_79609192 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<style>
    .list-box{
        width: 1000px;
        margin: 10px auto;
    }
</style>
<div class="list-box">
    <h1>
        <?php echo $_smarty_tpl->tpl_vars['condata']->value["ctitle"];?>

    </h1>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['condata']->value["cons"];?>

    </p>
</div>
</body>
</html><?php }
}
