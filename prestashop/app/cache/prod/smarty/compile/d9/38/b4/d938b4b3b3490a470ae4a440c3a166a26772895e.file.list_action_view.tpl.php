<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:07:44
         compiled from "C:\xampp\htdocs\dashboard\prestashop\admin071oae3gn\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2509459c6b100c6f991-11292341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd938b4b3b3490a470ae4a440c3a166a26772895e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\admin071oae3gn\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1506191599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2509459c6b100c6f991-11292341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b100cc18e5_69100788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b100cc18e5_69100788')) {function content_59c6b100cc18e5_69100788($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
