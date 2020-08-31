<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 10:29:05
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4244f1e96176_96264514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d6b7e52f1a497b4dd8aa61e0378210cb65d8e9' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\reg.html',
      1 => 1598178525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4244f1e96176_96264514 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台首页</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<form style="height: 300px" class="form-horizontal" action="/server/mvc-test/index.php/admin/reg/addUser" method="post">
    <h1>注册页面</h1>
    <div class="form-group">
        <lable for="inputEmail3" class="col-sm-2 control-label">用户名</lable>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <lable for="inputEmail3" class="col-sm-2 control-label">密码</lable>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <lable for="inputEmail3" class="col-sm-2 control-label">再次密码</lable>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail31" placeholder="再次密码" name="pass1">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" >
            <button type="submit" class="btn btn-default">注册
            </button>
            &nbsp;   &nbsp;   &nbsp;   &nbsp;
            已有账号？请登录

            <a href="/server/mvc-test/index.php/admin" class="btn btn-default">登录</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
