<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:05:54
         compiled from "C:\xampp\htdocs\dashboard\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2173959c6b092aba1a3-90713412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae4ee53c7e764a2e24633359e9a384ddf6eb059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1506191680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2173959c6b092aba1a3-90713412',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b092ac3952_15463979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b092ac3952_15463979')) {function content_59c6b092ac3952_15463979($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
