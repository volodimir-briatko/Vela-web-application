<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 18:06:30
         compiled from "templates\email\sucess_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287805574a57a622c68-01709000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9e30cce8f6fc44afc10ded404b7e97df19a552' => 
    array (
      0 => 'templates\\email\\sucess_order.tpl',
      1 => 1433862102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287805574a57a622c68-01709000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5574a57a81ce44_97671929',
  'variables' => 
  array (
    'ins_id' => 0,
    'creating' => 0,
    'lastname' => 0,
    'event' => 0,
    'persnum' => 0,
    'email' => 0,
    'tel' => 0,
    'products' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574a57a81ce44_97671929')) {function content_5574a57a81ce44_97671929($_smarty_tpl) {?><table width="500" border="1" cellpadding="2" cellspacing="2">
	<tr>
    	<td>Number of order</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ins_id']->value;?>
</td>
    </tr>
     <tr>
    	<td>Create date</td>
        <td><?php echo $_smarty_tpl->tpl_vars['creating']->value;?>
</td>
    </tr>
    <tr>
    	<td>Your name</td>
        <td><?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</td>
    </tr>
    <tr>
    	<td>Event</td>
        <td><?php echo $_smarty_tpl->tpl_vars['event']->value;?>
</td>
    </tr>
    <tr>
    	<td>Number of persons</td>
        <td><?php echo $_smarty_tpl->tpl_vars['persnum']->value;?>
</td>
    </tr>
    <tr>
    	<td>E-mail</td>
        <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
    </tr>
    <tr>
    	<td>Phone number</td>
        <td><?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</td>
    </tr>
     <tr>
    	<td>Order</td>
        <td>
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <ol>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        	<li><?php echo $_smarty_tpl->tpl_vars['p']->value['page_name'];?>
</li>
        <?php } ?>
        </ul>
        <?php }?>
        </td>
    </tr>
    
</table><?php }} ?>
