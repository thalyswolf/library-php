<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:31:54
         compiled from "C:\xampp\htdocs\dashboard\prestashop\themes\classic\templates\checkout\_partials\cart-detailed-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3232159c6b6aa8bf264-84333198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ea91eb023934bbdeac9d6663919965f5cb3c8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1506191702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3232159c6b6aa8bf264-84333198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b6aa8eefe8_34302301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b6aa8eefe8_34302301')) {function content_59c6b6aa8eefe8_34302301($_smarty_tpl) {?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

      </div>
    <?php }?>
  </div>

<?php }} ?>
