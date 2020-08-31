<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 08:27:50
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b63066aeee2_25991794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e348a82f7fda28064bf0b3d7bf01d80d7af00766' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\addpage.html',
      1 => 1598776060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b63066aeee2_25991794 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/server/mvc-test/index.php/admin/category/add"  style="margin-top: 30px;margin-bottom:30px " method="post" enctype="multipart/form-data">
    <input type="text" placeholder="添加一级栏目" name="cname"><br>
    <select name="isshow" >
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
    </select><br>
    <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
    栏目描述:
    <textarea name="info" cols="30" rows="10"></textarea>
    <input type="hidden" value="hidden" name="imgurl">
    <input type="file" name="file">
    <div class="upload">

    </div>
    <input type="submit" value="添加">
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.multiple=false;
    uploadObj.createView({
        parent:document.querySelector(".upload")
    })
    uploadObj.up("/server/mvc-test/index.php/admin/category/uploadfile",function (e) {
           $("input[type=hidden]").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
