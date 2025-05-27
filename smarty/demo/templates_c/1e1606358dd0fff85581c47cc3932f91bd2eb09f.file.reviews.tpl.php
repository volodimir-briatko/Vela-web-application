<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-02 09:46:20
         compiled from "templates\reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2281155774f793ceb18-38567500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1606358dd0fff85581c47cc3932f91bd2eb09f' => 
    array (
      0 => 'templates\\reviews.tpl',
      1 => 1434727441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2281155774f793ceb18-38567500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55774f79556532_01391415',
  'variables' => 
  array (
    'reviews' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55774f79556532_01391415')) {function content_55774f79556532_01391415($_smarty_tpl) {?> <!-- content begin -->
  <div id="content"> 
    <!-- breadcramps begin -->
    <div id="breadcramps">
      <ul>
        <li><a href="#"><span class="home"></span>home</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <!-- breadcramps end -->
    <div class="wrapper"> 
      <!-- reviews_page begin -->
      <div class="reviews_page">
		  <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
        <ul class="reviews_list">
        	<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li>
            	<div class="raiting"><div class="active" style="width:<?php echo ($_smarty_tpl->tpl_vars['p']->value['rate']-0)*20;?>
%;"></div></div>
                <div class="comment">
                	<div class="user"><?php echo $_smarty_tpl->tpl_vars['p']->value['page_name'];?>
</div>
                    <p><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</p>
                </div>
            </li>
            <?php } ?>
        </ul>
        <?php } else { ?>
        <p class="no-reviews">there are not reviews here</p>
        <?php }?>
        
        <div class="add_review"><a href="javascript:;" class="green_button" onClick="open_popup('#add_review_popup')">add Testimonial</a></div>
		<div class="clear"></div>
      </div>
      <!-- reviews_page end -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- content end --><?php }} ?>
