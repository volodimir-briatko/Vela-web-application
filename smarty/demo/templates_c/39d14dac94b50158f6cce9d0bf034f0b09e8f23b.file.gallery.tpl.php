<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-29 15:26:11
         compiled from "templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26707557dbf5ca2bc41-20339737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d14dac94b50158f6cce9d0bf034f0b09e8f23b' => 
    array (
      0 => 'templates\\gallery.tpl',
      1 => 1440850828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26707557dbf5ca2bc41-20339737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557dbf5ca72f98_03370473',
  'variables' => 
  array (
    'galleries' => 0,
    'big_photo_path' => 0,
    'photo' => 0,
    'small_photo_path' => 0,
    'photos_in_photoalbum' => 0,
    'url2' => 0,
    'for_gal_count' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557dbf5ca72f98_03370473')) {function content_557dbf5ca72f98_03370473($_smarty_tpl) {?><!-- content begin -->
  <div id="content"> 
  <div class="gallery_box">
  	<div class="wrapper">
    	<div class="close"></div>
        <div class="prev"></div>
        <div class="next"></div>
        <div class="img"><img src="/pics/img_19.jpg" alt=""></div>
    	<div class="clear"></div>
    </div>
  </div>
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
      <div class="gallery_page">
      <?php if ($_smarty_tpl->tpl_vars['galleries']->value) {?>
      	<ul class="gallery_list">
        <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['big_photo_path']->value;
echo $_smarty_tpl->tpl_vars['photo']->value['foto_b'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['small_photo_path']->value;
echo $_smarty_tpl->tpl_vars['photo']->value['foto_m'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['page_name'];?>
"><span class="zoom"></span></a></li>
        <?php } ?>
        </ul>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['photos_in_photoalbum']->value>0) {?>
        <div class="add_one_more"></div>
        <?php echo '<script'; ?>
 type="text/javascript">
			 	var url = "<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
";
				var photos_in_photoalbum = <?php echo $_smarty_tpl->tpl_vars['photos_in_photoalbum']->value;?>
;
			 <?php echo '</script'; ?>
>
        <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['for_gal_count']->value) {?>
	<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable("0", null, 0);?>
    <?php echo '<script'; ?>
 type="text/javascript">
 	var gallery_photos = new Array;
	var gallery_url = new Array;
	<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['for_gal_count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
	gallery_photos[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]="<?php echo $_smarty_tpl->tpl_vars['big_photo_path']->value;
echo $_smarty_tpl->tpl_vars['photo']->value['foto_b'];?>
";
	gallery_url[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]="<?php echo $_smarty_tpl->tpl_vars['photo']->value['url'];?>
";  
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
	<?php } ?>
	<?php echo '</script'; ?>
>
  <?php }?>	
		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end --><?php }} ?>
