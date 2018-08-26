<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:42:40
         compiled from "module:ps_wirepayment/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2174159c6b930bcf808-33992131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75bdf601ec9e01aea0e9e66eb6225ba1b66af2dd' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/payment_return.tpl',
      1 => 1506191676,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2174159c6b930bcf808-33992131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'reference' => 0,
    'contact_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b930c3f5d7_46981643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b930c3f5d7_46981643')) {function content_59c6b930c3f5d7_46981643($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok') {?>
    <p>
      <?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
<br/>
      <?php echo smartyTranslate(array('s'=>'Please send us a bank wire with:','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>

    </p>
    <?php echo $_smarty_tpl->getSubTemplate ('module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <p>
      <?php echo smartyTranslate(array('s'=>'Please specify your order reference %s in the bankwire description.','sprintf'=>array($_smarty_tpl->tpl_vars['reference']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
<br/>
      <?php echo smartyTranslate(array('s'=>'We\'ve also sent you this information by e-mail.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>

    </p>
    <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive payment.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</strong>
    <p>
      <?php echo smartyTranslate(array('s'=>'If you have questions, comments or concerns, please contact our [1]expert customer support team[/1].','d'=>'Modules.Wirepayment.Shop','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['contact_url']->value)."'>",'[/1]'=>'</a>')),$_smarty_tpl);?>

    </p>
<?php } else { ?>
    <p class="warning">
      <?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our [1]expert customer support team[/1].','d'=>'Modules.Wirepayment.Shop','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['contact_url']->value)."'>",'[/1]'=>'</a>')),$_smarty_tpl);?>

    </p>
<?php }?>
<?php }} ?>
