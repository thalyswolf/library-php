<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:05:54
         compiled from "C:\xampp\htdocs\dashboard\prestashop\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774059c6b0926eb2b5-59051576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8f70922c255f13ebf2f5f1e6588dff871853f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\modules\\welcome\\views\\navbar.tpl',
      1 => 1506191680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2774059c6b0926eb2b5-59051576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b0927036f7_62209369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b0927036f7_62209369')) {function content_59c6b0927036f7_62209369($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
