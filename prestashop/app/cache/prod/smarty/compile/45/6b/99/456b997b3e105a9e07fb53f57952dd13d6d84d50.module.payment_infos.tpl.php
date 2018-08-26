<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:08:27
         compiled from "module:ps_checkpayment/views/templates/front/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2310959c6b12b20a292-74974763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '456b997b3e105a9e07fb53f57952dd13d6d84d50' => 
    array (
      0 => 'module:ps_checkpayment/views/templates/front/payment_infos.tpl',
      1 => 1506191671,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2310959c6b12b20a292-74974763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkTotal' => 0,
    'checkOrder' => 0,
    'checkAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b12b224350_95229394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b12b224350_95229394')) {function content_59c6b12b224350_95229394($_smarty_tpl) {?>

<section>
  <p><?php echo smartyTranslate(array('s'=>'Please send us your check following these rules:','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>

    <dl>
      <dt><?php echo smartyTranslate(array('s'=>'Amount','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
</dt>
      <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkTotal']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
      <dt><?php echo smartyTranslate(array('s'=>'Payee','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
</dt>
      <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkOrder']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
      <dt><?php echo smartyTranslate(array('s'=>'Send your check to this address','d'=>'Modules.Checkpayment.Shop'),$_smarty_tpl);?>
</dt>
      <dd><?php echo $_smarty_tpl->tpl_vars['checkAddress']->value;?>
</dd>
    </dl>
  </p>
</section>
<?php }} ?>
