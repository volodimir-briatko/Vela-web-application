<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-26 13:37:44
         compiled from "templates\wishlist_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1935056067167221e30-89871746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985e7c27068a52ac1d045aff56ff15a25293eabe' => 
    array (
      0 => 'templates\\wishlist_product.tpl',
      1 => 1443263715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1935056067167221e30-89871746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_560671672e80c1_92191530',
  'variables' => 
  array (
    'page' => 0,
    'big_photo_path' => 0,
    'middle_photo_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560671672e80c1_92191530')) {function content_560671672e80c1_92191530($_smarty_tpl) {?> <!-- content begin -->
  <div id="content"> 
  <?php if ($_smarty_tpl->tpl_vars['page']->value['image_big']) {?>
 
  <div class="gallery_box card">
  	<div class="wrapper">
    	<div class="close"></div>
        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['big_photo_path']->value;
echo $_smarty_tpl->tpl_vars['page']->value['image_big'];?>
" alt=""></div>
    	<div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  
  <?php }?>
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
      <div class="menu_page">
      		<aside id="sidebar">
            	<a href="/wishlist/" class="back">< back to your wish list</a>
                <div class="clear"></div>
            </aside>
            <div class="menu_block">
            	<div class="product_card">
                     <div class="big_photo"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value['image_middle'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?><a href="javascript:;" rel="prettyPhoto[gallery2]"><img src="<?php echo $_smarty_tpl->tpl_vars['middle_photo_path']->value;
echo $_smarty_tpl->tpl_vars['page']->value['image_middle'];?>
" alt=""><span class="zoom"></span></a><?php } else { ?><img src="/images/image_coming_soon_card.jpg" alt=""><?php }?></div>
                    
                    <div class="about_product padding2" >
                    	<div class="category"><?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
</div>
                        <div class="product_name"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
</div>
                        <p><?php echo $_smarty_tpl->tpl_vars['page']->value['short_text'];?>
</p>
                        <div class="select_button2">
                        <a href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" class="remove">remove</a>
                        </div>
                        <div class="details">
                        	<?php echo $_smarty_tpl->tpl_vars['page']->value['text'];?>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
			<div class="clear"></div>
            </div>

		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end --><?php }} ?>
