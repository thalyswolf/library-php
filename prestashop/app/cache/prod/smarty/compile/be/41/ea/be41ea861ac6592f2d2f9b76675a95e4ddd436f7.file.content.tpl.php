<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:05:52
         compiled from "C:\xampp\htdocs\dashboard\prestashop\admin071oae3gn\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267559c6b090c46f31-60966784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be41ea861ac6592f2d2f9b76675a95e4ddd436f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\admin071oae3gn\\themes\\default\\template\\content.tpl',
      1 => 1506191593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267559c6b090c46f31-60966784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b090c992f8_14677335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b090c992f8_14677335')) {function content_59c6b090c992f8_14677335($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
