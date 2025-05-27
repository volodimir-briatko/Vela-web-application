<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-21 11:26:53
         compiled from "templates\galleries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18026557db729057e23-10263088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a1d2cdf512f683ddddac4412e8bff699ffd5de' => 
    array (
      0 => 'templates\\galleries.tpl',
      1 => 1434727439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18026557db729057e23-10263088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557db729246717_02328540',
  'variables' => 
  array (
    'galleries' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557db729246717_02328540')) {function content_557db729246717_02328540($_smarty_tpl) {?><!-- content begin -->
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
      <div class="gallery_page">
      	<?php if ($_smarty_tpl->tpl_vars['galleries']->value) {?>
        <ul class="gallery_albums">
        <?php  $_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gallery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->key => $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
?>
        	<li><a href="/gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['url'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image'];?>
" alt=""></a>
            	<div class="name"><a href="/gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['page_name'];?>
</a></div>
                <div class="photo_qvon"><span><?php echo $_smarty_tpl->tpl_vars['gallery']->value['image_count'];?>
</span> photos</div>
            </li>
            <?php } ?>
        </ul>
        <?php }?>
        <div class="add_one_more"><a href="#"></a></div>
		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end --><?php }} ?>
