<!DOCTYPE html>
<!--[if IE 7 ]><html class="no-js ie7" lang="ru"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="ru"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="ru">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta name="format-detection" content="telephone=no">
<meta name="description" content="{$page['description']}">
<meta name="keywords" content="{$page['keywords']}">
<title>{$page['title']}</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<script src="/js/modernizr.js" type="text/javascript"></script>
<script src="/js/jquery-1.9.0.js"></script>
<script src="/js/script.js" type="text/javascript"></script>
</head>
<body>
<!-- wrap begin -->
<div id="wrap">
<!-- header begin -->
{include file='header.tpl'}
<!-- header end -->

{include file="$template"}

<div class="pfooter"></div>
</div>
<!-- wrap end -->
<!-- footer begin -->
{include file='footer.tpl'}
 <!-- footer end -->
 
 <div id="popup_bg"></div>
 {if $wish_products}
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
{/if}

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
{literal}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66133405-1', 'auto');
  ga('send', 'pageview');
</script>
{/literal}
</body>
</html>
