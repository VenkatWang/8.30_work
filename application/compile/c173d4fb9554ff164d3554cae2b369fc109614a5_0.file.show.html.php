<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 14:04:18
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f466be2f31370_75314460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c173d4fb9554ff164d3554cae2b369fc109614a5' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\show.html',
      1 => 1598450655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f466be2f31370_75314460 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>
    <?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>

</h3>
<p>
    <?php echo $_smarty_tpl->tpl_vars['data']->value["cons"];?>

</p>
</body>
</html><?php }
}
