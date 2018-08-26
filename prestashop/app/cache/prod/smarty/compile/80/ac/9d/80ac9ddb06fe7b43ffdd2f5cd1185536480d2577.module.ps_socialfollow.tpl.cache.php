<?php /* Smarty version Smarty-3.1.19, created on 2017-09-23 15:57:11
         compiled from "module:ps_socialfollow/ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1181559c6ae87b804c0-73760610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollow/ps_socialfollow.tpl',
      1 => 1506191701,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1181559c6ae87b804c0-73760610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_links' => 0,
    'social_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c6ae87baf741_83776244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6ae87baf741_83776244')) {function content_59c6ae87baf741_83776244($_smarty_tpl) {?>


  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['social_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->key => $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->_loop = true;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php } ?>
    </ul>
  </div>

<?php }} ?>
