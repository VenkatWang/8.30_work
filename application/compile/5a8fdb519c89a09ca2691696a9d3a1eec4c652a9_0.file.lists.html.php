<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 10:56:26
  from 'D:\software\wampserver\www\server\mvc-test\application\template\index\lists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a345a6132d2_60904457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a8fdb519c89a09ca2691696a9d3a1eec4c652a9' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\index\\lists.html',
      1 => 1598698568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a345a6132d2_60904457 (Smarty_Internal_Template $_smarty_tpl) {
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
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li>
            <a href="/server/mvc-test/index.php/index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</a>
        </li>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
</body>
</html><?php }
}
