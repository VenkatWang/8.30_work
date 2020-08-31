<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-24 09:47:41
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f438cbdb7af91_36342187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f710702918f458b07ba08f4cb321cbb8f15f9f7' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\login.html',
      1 => 1598262419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f438cbdb7af91_36342187 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
>
    //如果cookie不加过期时间，cookie默认的生成周期是当浏览器打开的时候，关闭cookie就会自行删除
    // var date=new Date();
    // var time=date.getTime()+1000*30;
    // date.setTime(time)
    // document.cookie="name=zhangsan;expires="+date.toUTCString()+";domain=localhost;path=/server/mvc-test/index.php/admin";
    // document.cookie="age=12";
    //

<?php echo '</script'; ?>
>
<form style="height: 360px" class="form-horizontal" action="admin/index/login" method="post">
    <h1>欢迎来到后台管理系统</h1>
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

        <lable for="code" class="col-sm-2 control-label">验证码</lable>
        <div  class=" col-sm-10">
        <input style="width:35%"   type="text" placeholder="请输入验证码" name="code" id="code">
            <img src="http://localhost/server/mvc-test/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/server/mvc-test/index.php/admin/index/mycode'" style="cursor: pointer"><span style="font-size: 14px">看不清？换一张</span>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label for="">
                    <input type="checkbox">记住密码
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" >
            <button type="submit" class="btn btn-default">登录
            </button>
            &nbsp;   &nbsp;   &nbsp;   &nbsp;
            没有账号？请注册
            <a href="admin/reg/add" class="btn btn-default">注册</a>
        </div>
    </div>
</form>

</body>
</html><?php }
}
