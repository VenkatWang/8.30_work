<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:24:34
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba892a7f439_31207216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e59f77f111781aa89450566b59c8d14bc77ffb0' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\category.html',
      1 => 1598793860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba892a7f439_31207216 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>

<div class="container">

    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered">
    <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
<!--     <table class="table table-bordered">-->
<!--         <tr>-->
<!--             <td>层级</td>-->
<!--             <td>分类名称</td>-->
<!--             <td>操作</td>-->
<!--         </tr>-->
<!--         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>-->
<!--         <tr>-->
<!--             <td>一级分类</td>-->
<!--             <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>-->
<!--             <td>-->
<!--                 <a href="javascript:;" attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">添加</a>-->
<!--             </td>-->
<!--         </tr>-->
<!--         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
<!--         <tr>-->
<!--             <td>二级分类</td>-->
<!--             <td>🗡项目</td>-->
<!--             <td>添加</td>-->
<!--         </tr>-->
<!--     </table>-->
    <?php } else { ?>
       <table>
           <tr>没有数据</tr>
       </table>
    <?php }?>
</div>
<style>
    .panner{
        width: 60%;
        height: 400px;
        background: #fff;
        box-shadow: 0 0 4px #000;
        position: absolute;
        left:0;top:0;right:0;bottom:0;
        margin: auto;
        z-index: 1;
        display: none;
    }
</style>
<div class="panner addpanner">
   <div class="close">
       X
   </div>
    <form action="/server/mvc-test/index.php/admin/category/add" method="post">
        <input type="text" name="cname"><br>
        <input type="hidden" name="cid"><br>
        <select name="isshow" >
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
        栏目描述:
        <textarea name="info" cols="10" rows="2">

    </textarea>
        <input type="submit" value="提交">
    </form>
</div>

<div class="panner editpanner">
    <div class="close">
        X
    </div>
    <form action="/server/mvc-test/index.php/admin/category/add" method="post">
        <input type="text" name="cname">
        <select name="pid" id="opts">

        </select>
        <select name="isshow" id="ishow">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
        栏目描述:
        <textarea name="info" cols="10" rows="2"></textarea>
        <input type="hidden" name="imgurl" id="imgurl">
        <div class="editupload"></div>
        <input type="button" value="修改">
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var upObj=new upload();
    upObj.createView({
        parent:document.querySelector(".editupload")
    })
    upObj.selectBtn.parentNode.style.lineHeight="50px"
    upObj.upBtn.style.lineHeight="50px"
    upObj.up("/server/mvc-test/index.php/admin/category/uploadfile",function (e) {
           $('#imgurl').val(e[0]);
           console.log(e)
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
