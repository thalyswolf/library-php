<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:20:26
         compiled from "C:\xampp\htdocs\dashboard\prestashop\admin071oae3gn\themes\new-theme\template\components\layout\confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2899059c6b3fade31b6-14212766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294bb7fbf6f081e2d73045ddf0eb5dbf475fc4ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\admin071oae3gn\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1506191602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2899059c6b3fade31b6-14212766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b3fadfa275_84391607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b3fadfa275_84391607')) {function content_59c6b3fadfa275_84391607($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
