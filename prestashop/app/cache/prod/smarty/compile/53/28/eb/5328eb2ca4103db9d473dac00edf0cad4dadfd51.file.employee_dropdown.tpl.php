<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:20:25
         compiled from "C:\xampp\htdocs\dashboard\prestashop\admin071oae3gn\themes\new-theme\template\components\layout\employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2850059c6b3f9aaf1b3-92290036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5328eb2ca4103db9d473dac00edf0cad4dadfd51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\admin071oae3gn\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1506191602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2850059c6b3f9aaf1b3-92290036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b3f9ae9ee9_54305931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b3f9ae9ee9_54305931')) {function content_59c6b3f9ae9ee9_54305931($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="img-circle person" data-toggle="dropdown">
      <i class="material-icons">person</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right p-a-1 m-r-2">
    <div class="text-xs-center employee_avatar">
      <img class="avatar img-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <hr>
    <a class="employee-link profile-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee">
      <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

    </a>
    <a class="employee-link m-t-1" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
      <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

    </a>
  </div>
</div>
<?php }} ?>
