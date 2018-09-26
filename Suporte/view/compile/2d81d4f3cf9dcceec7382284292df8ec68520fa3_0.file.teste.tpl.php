<?php
/* Smarty version 3.1.32, created on 2018-07-04 18:34:35
  from 'C:\xammpp7\htdocs\website\Suporte\view\teste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3cf71b07d012_55836069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d81d4f3cf9dcceec7382284292df8ec68520fa3' => 
    array (
      0 => 'C:\\xammpp7\\htdocs\\website\\Suporte\\view\\teste.tpl',
      1 => 1530722071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3cf71b07d012_55836069 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="" action="<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
" method="post">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Link</th>
        <th scope="col">Última Alteração</th>
        <th scope="col">Período Retorno</th>
        <th scope="col">Observação</th>
        <th scope="col">Estado</th>
        <th scope="col">Salvar</th>
      </tr>
    </thead>
    <tbody>
  
    </tbody>
    <!-- <tbody>
       <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['RETORNOS']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
       <tr>
        <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['retornoid']))) {?>
         <td><?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['retornoid'];?>
</td>
        <?php }?>
        <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link']))) {?>
         <td><a href="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link'];?>
">Link retorno</a></td>
        <?php }?>
        <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['horacadastro']))) {?>
         <td><?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['horacadastro'];?>
</td>
        <?php }?>
        <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hora']))) {?>
         <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['hora'];?>
"></td>
        <?php }?>
        <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['observacao']))) {?>
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['observacao'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('valor', $_prefixVariable1);?>
          <td><input id="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['observacao'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
" name="teste"></td>
        <?php }?>
        <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao']))) {?>
        <td>
          <select value="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
">
            <option><?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
</option>
            <option>Em andamento</option>
            <option>Reagendado</option>
          </select>
        </td>
        <?php }?>
        <td><input type="submit" class="btn btn-default" value="Salvar"></td>
       </tr>
      <?php
}
}
?>
    </tbody> -->
<?php }
}
