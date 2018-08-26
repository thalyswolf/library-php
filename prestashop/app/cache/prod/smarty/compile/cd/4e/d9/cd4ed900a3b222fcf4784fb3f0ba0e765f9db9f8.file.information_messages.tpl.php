<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:20:26
         compiled from "C:\xampp\htdocs\dashboard\prestashop\admin071oae3gn\themes\new-theme\template\components\layout\information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1586559c6b3fad17072-44045640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4ed900a3b222fcf4784fb3f0ba0e765f9db9f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\admin071oae3gn\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1506191602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1586559c6b3fad17072-44045640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b3fad2c468_19438621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b3fad2c468_19438621')) {function content_59c6b3fad2c468_19438621($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
