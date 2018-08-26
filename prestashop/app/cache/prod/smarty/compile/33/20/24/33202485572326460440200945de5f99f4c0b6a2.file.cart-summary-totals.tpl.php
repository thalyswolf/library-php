<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:31:54
         compiled from "C:\xampp\htdocs\dashboard\prestashop\themes\classic\templates\checkout\_partials\cart-summary-totals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:848859c6b6aa7fea32-32019566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33202485572326460440200945de5f99f4c0b6a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
      1 => 1506191702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848859c6b6aa7fea32-32019566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b6aa836284_84371441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b6aa836284_84371441')) {function content_59c6b6aa836284_84371441($_smarty_tpl) {?>
<div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

</div>
<?php }} ?>
