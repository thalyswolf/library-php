<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 16:08:26
         compiled from "C:\xampp\htdocs\dashboard\prestashop\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:684459c6b12ae542b4-65328469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4613956dedf93b972bc69d23c9de735a131693d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1506191702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '684459c6b12ae542b4-65328469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6b12ae75d62_69923375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6b12ae75d62_69923375')) {function content_59c6b12ae75d62_69923375($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
