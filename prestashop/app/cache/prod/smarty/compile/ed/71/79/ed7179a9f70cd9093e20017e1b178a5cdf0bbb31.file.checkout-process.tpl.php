<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:08:25
         compiled from "C:\xampp\htdocs\dashboard\prestashop\themes\classic\templates\checkout\checkout-process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2853659c6b12998e226-04665770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed7179a9f70cd9093e20017e1b178a5cdf0bbb31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\themes\\classic\\templates\\checkout\\checkout-process.tpl',
      1 => 1506191702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2853659c6b12998e226-04665770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b1299b3ec7_81522666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b1299b3ec7_81522666')) {function content_59c6b1299b3ec7_81522666($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["step"]->key;
?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>
