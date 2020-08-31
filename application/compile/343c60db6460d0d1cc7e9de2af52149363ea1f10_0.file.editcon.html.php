<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 15:25:24
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\editcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f467ee4e83685_47131671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '343c60db6460d0d1cc7e9de2af52149363ea1f10' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\editcon.html',
      1 => 1598455514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f467ee4e83685_47131671 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addcon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <form action="/server/mvc-test/index.php/admin/content/editcon" method="post">
        <div class="form-group">
            <label for="cid">所属分类</label>
            <select class="form-control" name="cid" id="cid" cid="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
">

            </select>
        </div>
        <input type="hidden" name="conid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" placeholder="标题" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
        </div>
        <div class="form-group">
            <label for="cons">内容主题</label>
            <textarea class="form-control" name="cons" id="cons" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['cons'];?>
</textarea>
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
