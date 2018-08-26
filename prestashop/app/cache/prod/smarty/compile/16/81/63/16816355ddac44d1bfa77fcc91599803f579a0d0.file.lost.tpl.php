<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:05:54
         compiled from "C:\xampp\htdocs\dashboard\prestashop\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2339759c6b092872534-45009807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16816355ddac44d1bfa77fcc91599803f579a0d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1506191680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2339759c6b092872534-45009807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b09288aaa1_98118463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b09288aaa1_98118463')) {function content_59c6b09288aaa1_98118463($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
