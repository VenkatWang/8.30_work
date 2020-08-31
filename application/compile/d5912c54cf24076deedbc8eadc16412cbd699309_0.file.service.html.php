<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 11:14:59
  from 'D:\software\wampserver\www\server\mvc-test\application\template\index\service.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b8a335e4117_20561668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5912c54cf24076deedbc8eadc16412cbd699309' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\index\\service.html',
      1 => 1598785973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b8a335e4117_20561668 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .my-service{
        width: 1000px;
        text-align: center;
        margin: 10px auto;
        background: #fff;
        height:auto;
    }
    .my-service-box{
        width: 800px;
        margin: 10px auto;
    }
    .my-service-list{
        width: 200px;
        height: 350px;
        float: left;

    }
</style>
<body style="background:#eee">
     <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
     <div class="my-service">
         <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h3>
         <h6><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</h6>
      <div class="my-service-box">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
          <ul class="my-service-list">
           <li>
               <img src="http://www.jiasu.cn/images/seravlist1.png" alt="">
           </li>
           <li>
               <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
           </li>
           <li><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</li>
       </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div style="clear: both;"></div>
       </div>
     </div>

       <div class="youshi">

       </div>
       <div class="liucheng">

       </div>

</body>
</html><?php }
}
