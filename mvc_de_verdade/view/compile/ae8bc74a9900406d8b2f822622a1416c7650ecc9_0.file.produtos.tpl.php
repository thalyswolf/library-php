<?php
/* Smarty version 3.1.31, created on 2017-10-24 18:46:15
  from "C:\xampp\htdocs\dashboard\mvc_de_verdade\view\produtos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ef6e573747d4_39505183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae8bc74a9900406d8b2f822622a1416c7650ecc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\mvc_de_verdade\\view\\produtos.tpl',
      1 => 1508863573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ef6e573747d4_39505183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Lista de produtos</h2>
<hr>

<section id="paginacao">
  <center>
    Paginas
  </center>
</section>

<section id="produtos" class="row">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
      <div class="col-xs-4" style="margin:30px">
        <div class="thumbnail">
           <img alt="..." src="http://placehold.it/150x150">
        </div>
        <div class="caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['p']->value['pro_nome'];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['p']->value['pro_valor'];?>
</p>
        </div>
      </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



</section>

<section id="paginacao-inferior" class="">
  <center>
    Paginas
  </center>
</section>
<?php }
}
