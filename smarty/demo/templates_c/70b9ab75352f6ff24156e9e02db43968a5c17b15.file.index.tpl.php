<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-11 21:23:35
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22422555b438aeee060-96885515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b9ab75352f6ff24156e9e02db43968a5c17b15' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1441995789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22422555b438aeee060-96885515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555b438b0ecb84_00925134',
  'variables' => 
  array (
    'page' => 0,
    'wish_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b438b0ecb84_00925134')) {function content_555b438b0ecb84_00925134($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="no-js ie7" lang="ru"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="ru"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="ru">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['keywords'];?>
">
<title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
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
 
 <div id="popup_bg"></div>
 <?php if ($_smarty_tpl->tpl_vars['wish_products']->value) {?>
<!--add_order_popup-->
<div class="popup_block" id="add_order_popup">
	<div class="close" onClick="close_popup('#add_order_popup')"></div>
    <div class="heading">Order</div>
    <form action="" method="post" id="add_order_popup_form">
    	<input type="hidden" name="action" value="add_order">
    	<dl>
        	<dt>Your name</dt>
            <dd><input type="text" class="txt" name="lastname"><div class="star">*</div></dd>
        	<dt>Event</dt>
            <dd><input type="text" class="txt" name="Event"></dd>
        	<dt>Number of <br>persons</dt>
            <dd><input type="text" class="txt" name="persnum"><div class="star">*</div></dd>
        	<dt>E-mail</dt>
            <dd><input type="text" class="txt" name="email"></dd>
        	<dt>Phone <br>number</dt>
            <dd><input type="text" class="txt" name="tel"><div class="star">*</div></dd>
            <dt>&nbsp;</dt>
            <dd>
            	<div class="ps">* Fields marked with an asterisk are required.</div>
                <input type="submit" class="sub green_button" value="send">
                <div class="sended">
                	<div class="ty">Thank you for your order.</div>
                    <p>We will contact you shortly. Have a nice day!</p>
                </div>
            </dd>
        </dl>
    </form>
</div>
<!--add_order_popup END-->
<?php }?>

<!--add revies-->
<div class="popup_block" id="add_review_popup">
	<div class="close" onClick="close_popup('#add_review_popup')"></div>
    <div class="heading">New testimonial</div>
    <form action="" method="post" id="add_review_popup_form">
    	<dl>
        	<dt>Your name</dt>
            <dd><input type="text" class="txt" name="lastname"><div class="star">*</div></dd>
        	<dt>rating</dt>
            <dd>
                <div class="reit_block">
                  <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                  </ul>
                  <input class="inp" name="rating" type="hidden">
                </div>
            </dd>
        	<dt>testimonial</dt>
            <dd><textarea class="txt" name="message"></textarea><div class="star">*</div></dd>
            <dt>&nbsp;</dt>
            <dd>
            	<div class="ps">* Fields marked with an asterisk are required.</div>
                <input type="submit" class="sub green_button" value="send">
                <div class="sended">
                	<div class="ty">Thank you for the opinion!</div>
                    <p>We’ll publish it soon.</p>
                </div>
            </dd>
        </dl>
    <input type="hidden" name="action" value="review">
    </form>
</div>
<!--add revies END-->
<!-- onTop-->
<div id="onTop">
  <div class="wr"> <a href="#top"></a> </div>
</div>
<!-- onTop END-->
<div id="offset_height"></div>

<?php echo '<script'; ?>
>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66133405-1', 'auto');
  ga('send', 'pageview');
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
