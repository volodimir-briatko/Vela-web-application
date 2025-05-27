<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-26 13:04:51
         compiled from "templates\wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29917556b399ca28d92-61214591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78bcaffc0d1659d63a7654c51ac214e171acc2b' => 
    array (
      0 => 'templates\\wishlist.tpl',
      1 => 1443261889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29917556b399ca28d92-61214591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b399ca6cc10_19577819',
  'variables' => 
  array (
    'page' => 0,
    'wish_products' => 0,
    'p' => 0,
    'photo_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b399ca6cc10_19577819')) {function content_556b399ca6cc10_19577819($_smarty_tpl) {?><!-- content begin -->
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
      <!-- contact_page begin -->
      <div class="favorites_page">
      		<div class="create">
            	<?php echo $_smarty_tpl->tpl_vars['page']->value['text'];?>

            </div>
            <div class="wish_list">
            	<div class="heading">Wish list</div>
                <?php if ($_smarty_tpl->tpl_vars['wish_products']->value) {?>
                <ul class="favorites_list">
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wish_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                	<li>
                    	<div class="img"><a href="/wishlist/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
/"><img src="<?php if ($_smarty_tpl->tpl_vars['p']->value['image']) {
echo $_smarty_tpl->tpl_vars['photo_path']->value;
echo $_smarty_tpl->tpl_vars['p']->value['image'];
} else { ?>/images/image_coming_soon.jpg<?php }?>" alt=""></a></div>
                        <a href="javascript:;" class="close" val="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"></a>
                        <div class="category">&nbsp;<?php echo $_smarty_tpl->tpl_vars['p']->value['type'];?>
&nbsp;</div>
                        <div class="name">&nbsp;<a href="/wishlist/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['p']->value['page_name'];?>
</a>&nbsp;</div>
                    </li>
                	
                    <?php } ?>
                </ul>
                <div class="order_now"><a href="javascript:;" onClick="open_popup('#add_order_popup')">MAKE A QUOTE</a></div>
                <?php } else { ?>
                <p class="notovars">Your wishlist is empty.<br> Look at the <a href="/menu/">menu</a></p>
                <?php }?>
                
            </div>

		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end --><?php }} ?>
