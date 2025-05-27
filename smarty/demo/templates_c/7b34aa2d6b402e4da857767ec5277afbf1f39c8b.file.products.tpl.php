<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-26 12:59:50
         compiled from "templates\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21735555b5b376dcbb6-86995236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b34aa2d6b402e4da857767ec5277afbf1f39c8b' => 
    array (
      0 => 'templates\\products.tpl',
      1 => 1443261482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21735555b5b376dcbb6-86995236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555b5b3770f577_96208440',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'page_text' => 0,
    'products' => 0,
    'product' => 0,
    'photo_path' => 0,
    'products_on_page' => 0,
    'url2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b5b3770f577_96208440')) {function content_555b5b3770f577_96208440($_smarty_tpl) {?><!-- content begin -->
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
      <div class="menu_page">
      		<aside id="sidebar">
            	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                <ul class="leftmain">
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                	<li class="<?php if ($_GET['category']==$_smarty_tpl->tpl_vars['category']->value['url']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id']>0) {?>submenu<?php } else { ?>menu<?php }?>" <?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id']>0) {?>value="<?php echo $_smarty_tpl->tpl_vars['category']->value['parent_id'];?>
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
                <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <ul class="menu_list">
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?><li>
                    	<div class="img"><a href="/<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
/"><img src="<?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {
echo $_smarty_tpl->tpl_vars['photo_path']->value;
echo $_smarty_tpl->tpl_vars['product']->value['image'];
} else { ?>/images/image_coming_soon.jpg<?php }?>" alt=""></a></div>
                        <div class="category">&nbsp;<?php echo $_smarty_tpl->tpl_vars['product']->value['type'];?>
&nbsp;</div>
                        <div class="name">&nbsp;<a href="/<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['product']->value['page_name'];?>
</a>&nbsp; </div>
                        <div class="select">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['fav']) {?>
                        <a href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="selected">selected</a>
                        <?php } else { ?>
                        <a href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">select</a>
                        <div class="hint"><span></span>This meal is ready<br>to order</div>
                        </div>
                        <?php }?>
                    </li><?php } ?>
                	
                </ul>
                <?php } else { ?>
                <div style=" padding:130px 0 0 0; text-align:center;">Empty category</div>
                <?php }?>
			 <?php if ($_smarty_tpl->tpl_vars['products_on_page']->value>0) {?>
			 <div class="add_one_more"></div>
             <?php echo '<script'; ?>
 type="text/javascript">
			 	var url = "<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
";
				var products_on_page = <?php echo $_smarty_tpl->tpl_vars['products_on_page']->value;?>
;
			 <?php echo '</script'; ?>
>
             <?php }?>
            </div>
		<div class="clear"></div>
      </div>
      <!-- contact_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end --><?php }} ?>
