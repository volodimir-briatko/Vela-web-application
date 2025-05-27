<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-25 23:50:58
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12055555b438b108377-88114528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a0706a90f19f17120a93d784f328f0a72ab2f5' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1440535855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12055555b438b108377-88114528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555b438b1a92f3_00654789',
  'variables' => 
  array (
    'wish_count' => 0,
    'header_menu' => 0,
    'v' => 0,
    'active_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b438b1a92f3_00654789')) {function content_555b438b1a92f3_00654789($_smarty_tpl) {?><header id="header">
	<div class="wrapper">
    	<a href="/"><img src="/images/logo.png" alt="" class="logo" width="223" height="95"></a>
        <div class="tels"><a href="tel:0433557877">0433 557 877</a>      <a href="tel:0414061626">0414 061 626</a></div>
        <div class="bascet">
        	<div class="wishes"><?php echo $_smarty_tpl->tpl_vars['wish_count']->value;?>
</div>
            <div class="link">wish list<br> <a href="/wishlist/">MAKE A QUOTE</a></div>
        </div>
        <a href="javascript:;" id="menu_button"><span></span></a>
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
/" class="<?php if ($_GET['url']==$_smarty_tpl->tpl_vars['v']->value['url']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value['url']=='menu') {
echo $_smarty_tpl->tpl_vars['active_menu']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['page_name'];?>
</a>
			<?php }?>
            <?php } ?>
             </nav>
    </div>
</header><?php }} ?>
