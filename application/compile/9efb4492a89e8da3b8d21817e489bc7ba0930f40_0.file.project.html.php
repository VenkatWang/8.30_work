<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:09:28
  from 'D:\software\wampserver\www\server\mvc-test\application\template\index\project.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba508524b38_97737882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9efb4492a89e8da3b8d21817e489bc7ba0930f40' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\index\\project.html',
      1 => 1598792950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba508524b38_97737882 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .list-box{
        width: 1000px;
        background:#fff;
        margin: 10px auto;
        border: 1px solid #000;
        padding: 0 50px;
    }
    .list{
        float: left;
        width: 200px;
        height: 200px;
        margin-left: 20px;

    }
</style>
<body>
     <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
     <ul class="list-box">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
         <li class="list">
             <a href="/server/mvc-test/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
           <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt=""  height="60">
           <h3>
               <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

           </h3>
           <div> <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</div>
             </a>
         </li>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <div style="clear:both"></div>
     </ul>
</body>
</html><?php }
}
