<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-30 12:39:52
         compiled from "templates\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260855ca22fb61d246-96204767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd13e5e7a8e812c10669ad96cb1af0fd40a94385' => 
    array (
      0 => 'templates\\slider.tpl',
      1 => 1443300546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260855ca22fb61d246-96204767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca22fb8bb143_72551033',
  'variables' => 
  array (
    'slider' => 0,
    'slide' => 0,
    'photo_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca22fb8bb143_72551033')) {function content_55ca22fb8bb143_72551033($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['slider']->value) {?>
<p class="jcarousel-pagination">&nbsp;</p>
<a class="jcarousel-control-prev" href="javascript:;"></a> <a class="jcarousel-control-next" href="javascript:;"></a>
<div class="jcarousel">
<ul>
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
<li class="item"><?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['photo_path']->value;
echo $_smarty_tpl->tpl_vars['slide']->value['foto'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['page_name'];?>
"  /><?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?></a><?php }?></li>
<?php } ?>
</ul>
</div>
<?php }?><?php }} ?>
