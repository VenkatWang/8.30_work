<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 06:15:11
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b43efd283a4_20307270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70b5bcb1445401d9371dbba7a29a7709d4fc50b' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\upload.html',
      1 => 1598768109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b43efd283a4_20307270 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/server/mvc-test/index.php/admin/category/uploadfile" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="上传图片">
</form>
</body>
</html><?php }
}
