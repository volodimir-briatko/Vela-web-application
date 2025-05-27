<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-26 12:58:37
         compiled from "templates\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11012556af4b3b5db68-12826665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb30d0576e0b8119fa845e0fea821c94e07aff5' => 
    array (
      0 => 'templates\\product.tpl',
      1 => 1443261515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11012556af4b3b5db68-12826665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556af4b3b96707_27386945',
  'variables' => 
  array (
    'page' => 0,
    'big_photo_path' => 0,
    'categories' => 0,
    'product_cat' => 0,
    'category' => 0,
    'page_text' => 0,
    'middle_photo_path' => 0,
    'next_url' => 0,
    'prev_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556af4b3b96707_27386945')) {function content_556af4b3b96707_27386945($_smarty_tpl) {?> <!-- content begin -->
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
            	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                <ul class="leftmain">
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                	<li class="<?php if ($_smarty_tpl->tpl_vars['product_cat']->value==$_smarty_tpl->tpl_vars['category']->value['id']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id']>0) {?>submenu<?php } else { ?>menu<?php }?>" <?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id']>0) {?>value="<?php echo $_smarty_tpl->tpl_vars['category']->value['parent_id'];?>
"<?php } else { ?>val="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"<?php }?>><a href="/menu/<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['category']->value['page_name'];?>
</a></li>
                    <?php } ?>
                </ul>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['page_text']->value;?>

                
                <div class="clear"></div>
            </aside>
            <div class="menu_block">
            	<div class="product_card">
                     <div class="big_photo"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value['image_middle'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?><a href="javascript:;" rel="prettyPhoto[gallery2]"><img src="<?php echo $_smarty_tpl->tpl_vars['middle_photo_path']->value;
echo $_smarty_tpl->tpl_vars['page']->value['image_middle'];?>
" alt=""><span class="zoom"></span></a><?php } else { ?><img src="/images/image_coming_soon_card.jpg" alt=""><?php }?></div>
                    <!--<?php echo $_smarty_tpl->tpl_vars['big_photo_path']->value;
echo $_smarty_tpl->tpl_vars['page']->value['image_big'];?>
-->
                    
                    <div class="about_product">
                    	<a href="/<?php echo $_smarty_tpl->tpl_vars['next_url']->value;?>
/" class="next"></a>
                    	<a href="/<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
/" class="prev"></a>
                    	<div class="category"><?php echo $_smarty_tpl->tpl_vars['page']->value['type'];?>
</div>
                        <div class="product_name"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
</div>
                        <p><?php echo $_smarty_tpl->tpl_vars['page']->value['short_text'];?>
</p>
                        <div class="select_button">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['fav']) {?>
                        <a href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" class="selected">selected</a>
                        <?php } else { ?>
                            <a href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
">select</a>
                            <div class="hint"><span></span>This meal is ready<br>to order</div>
                            <?php }?>
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
