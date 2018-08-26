<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:31:54
         compiled from "C:\xampp\htdocs\dashboard\prestashop\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2951559c6b6aa72f6a3-44522863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc11f414747a8398fac771bae06c8e13c8b18acb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1506191702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2951559c6b6aa72f6a3-44522863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b6aa75a4b5_43244750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b6aa75a4b5_43244750')) {function content_59c6b6aa75a4b5_43244750($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
