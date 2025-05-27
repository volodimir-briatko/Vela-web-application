<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-02 09:55:14
         compiled from "templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4417555b43905a2e42-75449500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa6d31c29f6edf2e8989dae46ae2ec9367261307' => 
    array (
      0 => 'templates\\page.tpl',
      1 => 1434971113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4417555b43905a2e42-75449500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555b43905e3315_41247613',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b43905e3315_41247613')) {function content_555b43905e3315_41247613($_smarty_tpl) {?>

<!-- content begin -->
<div id="content">
    <!-- breadcramps begin -->
	<div id="breadcramps">
    	<ul>
        	<li><a href="/"><span class="home"></span>home</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- breadcramps end -->
    <div class="wrapper">
<?php echo $_smarty_tpl->tpl_vars['page']->value['text'];?>

	</div>
    <div class="clear"></div>
    </div>
  <!-- content END -->  <?php }} ?>
