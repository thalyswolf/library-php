<?php /* Smarty version Smarty-3.1.19, created on 2017-09-24 12:45:07
         compiled from "C:\xampp\htdocs\dashboard\prestashop\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:408059c7d30307cb20-90446579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5a404ddd837c4c3ce9f31608da9a3b647fe1da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1506191701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '408059c7d30307cb20-90446579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c7d3030d07b1_04510634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c7d3030d07b1_04510634')) {function content_59c7d3030d07b1_04510634($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
