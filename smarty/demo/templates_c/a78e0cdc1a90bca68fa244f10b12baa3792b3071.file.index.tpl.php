<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 21:04:55
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265765522c3f14dc4a3-06742030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78e0cdc1a90bca68fa244f10b12baa3792b3071' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1428343494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265765522c3f14dc4a3-06742030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5522c3f1542c13_53300098',
  'variables' => 
  array (
    'description' => 0,
    'keywords' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5522c3f1542c13_53300098')) {function content_5522c3f1542c13_53300098($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="no-js ie7" lang="ru"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="ru"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="ru">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<?php echo '<script'; ?>
 src="/js/modernizr.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery-1.9.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/script.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
<body>
<!-- wrap begin -->
<div id="wrap">
<!-- header begin -->
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header end -->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="pfooter"></div>
</div>
<!-- wrap end -->
<!-- footer begin -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <!-- footer end -->
</body>
</html>
<?php }} ?>
