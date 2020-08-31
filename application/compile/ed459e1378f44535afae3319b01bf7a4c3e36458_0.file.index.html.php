<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 06:17:45
  from 'D:\software\wampserver\www\server\mvc-test\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f6709de0763_40196450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed459e1378f44535afae3319b01bf7a4c3e36458' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\index.html',
      1 => 1597990663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f6709de0763_40196450 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
   <ul>
       <li><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
       <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
       <li><?php if ($_smarty_tpl->tpl_vars['v']->value["sex"] == "男") {?>
            男
            <?php } else { ?>
            女
            <?php }?>
       </li>
   </ul>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <a href="index.php/teach/log/add">
      添加日报
  </a>
</body>
</html><?php }
}
