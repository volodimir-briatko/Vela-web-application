<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 20:57:00
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173535522c3f155b784-79631107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3109c4734d8328fd407bf191fa165b9b9f90fd1' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1428343007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173535522c3f155b784-79631107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5522c3f15852e0_87411775',
  'variables' => 
  array (
    'header_menu' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522c3f15852e0_87411775')) {function content_5522c3f15852e0_87411775($_smarty_tpl) {?><header id="header">
	<div class="wrapper">
    	<a href="/"><img src="/images/logo.png" alt="" class="logo" width="223" height="95"></a>
        <div class="tels"><a href="tel:0433557877">0433 557 877</a>      <a href="tel:0414061626">0414 061 626</a></div>
        <div class="bascet">
        	<div class="wishes">4</div>
            <div class="link">wish list<br> <a href="#">order now</a></div>
        </div>
         <nav id="menu">

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['header_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
               <?php if ($_smarty_tpl->tpl_vars['v']->value['inmenu']==1) {?>
		<a href="/<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
/" <?php if ($_GET['url']==$_smarty_tpl->tpl_vars['v']->value['url']) {?>  class="active" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['page_name'];?>
</a>
			<?php }?>
            <?php } ?>
             </nav>
    </div>
</header><?php }} ?>
