<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 14:22:09
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f467011df4546_74696848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0cf5d488e0912b0261a9f64127314c85d39682e' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\showList.html',
      1 => 1598451629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f467011df4546_74696848 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <table class="table table-border">
            <tr>
                <th>所属分类</th>
                <th>标题</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

                </td>
                <td>
                    <a href="/server/mvc-test/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                    <a href="/server/mvc-test/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body>
</html><?php }
}
