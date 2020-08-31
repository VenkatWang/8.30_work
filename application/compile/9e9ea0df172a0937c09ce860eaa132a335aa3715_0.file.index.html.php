<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 07:44:19
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48b5d3741b90_99230743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e9ea0df172a0937c09ce860eaa132a335aa3715' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\index.html',
      1 => 1598600202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48b5d3741b90_99230743 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
       body{
           padding: 0;
           margin: 0;
       }
       .header{
           width: 100%;
           height: 120px;
           background: #c26133;
        }
        .header h1{
            text-align: center;
            padding-top: 30px;
        }
        .logininfo{
            float: right;
            margin-right: 30px;
        }
        .main{
            width: 100%;
            height: 600px;
            border: 1px solid red;
        }
        .bottom{
            width: 100%;
            height: 50px;
            text-align: center;
            position: relative;
            background-color: #8a6d3b;
        }
        .bottom span{
            position: absolute;
            left: 0;right: 0;bottom: 0;margin: auto;
        }
       .left{
           width: 30%;
           height: 100%;
           border-right: 5px solid #000;
           float: left;box-sizing: border-box;
       }
       .right{
           width: 70%;
           height: 100%;

           float: left;box-sizing: border-box;
       }
        iframe{
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body>
<!--target  _self本窗口打开  _blank新窗口打开 _top顶部打开-->
<div class="header">
    <h1>欢迎来到后台管理系统</h1>
    <div class="logininfo">
        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['uname']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span>
        <span>
            <a href="/server/mvc-test/index.php/admin">退出登录</a>
        </span>
    </div>
</div>
<div class="main">
    <div class="left">
        <ul>
            <li>
                用户管理
                <ul class="son">
                    <li>
                        <a href="edituser.html" target="main">查看用户</a></li>
                    <a href="edituser.html" target="main">修改用户</a></li>
                </ul>
            </li>
            <li>
                栏目管理
                <ul class="son">
                    <li>
                        <a href="/server/mvc-test/index.php/admin/category/int" target="main">查看栏目</a>
                    </li>
                    <li>
                        <a href="/server/mvc-test/index.php/admin/category/addpage" target="main">添加栏目</a>
                    </li>
                </ul>
            </li>
            <li>
                内容管理
                <ul class="son">
                    <li>
                        <a href="/server/mvc-test/index.php/admin/content/add" target="main">添加内容</a></li>
                    <li>
                        <a href="/server/mvc-test/index.php/admin/content/showList" target="main">修改内容</a></li>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
   <span> xxxx版权信息，xxx制作，联系方式</span>
</div>

</body>
</html><?php }
}
