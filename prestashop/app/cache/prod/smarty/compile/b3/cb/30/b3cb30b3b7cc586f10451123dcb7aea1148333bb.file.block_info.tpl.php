<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:17:45
         compiled from "C:\xampp\htdocs\dashboard\prestashop\modules\paypal\views\templates\admin\block_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1495959c6b359e64096-21870826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3cb30b3b7cc586f10451123dcb7aea1148333bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\modules\\paypal\\views\\templates\\admin\\block_info.tpl',
      1 => 1506194257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495959c6b359e64096-21870826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b359ece898_60189375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b359ece898_60189375')) {function content_59c6b359ece898_60189375($_smarty_tpl) {?>
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="paypal_block_info panel">
            <p><?php echo smartyTranslate(array('s'=>'If you have just created your PayPal account, check the email sent by PayPal to confirm your email address.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <p><?php echo smartyTranslate(array('s'=>'If you encounter rounding issues with your orders, please change PrestaShop round mode in:','mod'=>'paypal'),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['preference']->value,'javascript','UTF-8');?>
}"><?php echo smartyTranslate(array('s'=>'Preferences > General','mod'=>'paypal'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'then change for:','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <p><b><?php echo smartyTranslate(array('s'=>'Round mode: "Round up away from zero, when it is half way there (recommended) "','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
            <p><b><?php echo smartyTranslate(array('s'=>'Round type: "Round on each item"','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
        </div>
    </div>
</div><?php }} ?>
