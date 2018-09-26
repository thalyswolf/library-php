<?php
/* Smarty version 3.1.32, created on 2018-07-04 22:11:37
  from 'C:\xammpp7\htdocs\website\Suporte\view\retorno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3d29f9483a47_06843145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac71d5202d6dc0b09090206109d417aa7093e88' => 
    array (
      0 => 'C:\\xammpp7\\htdocs\\website\\Suporte\\view\\retorno.tpl',
      1 => 1530735094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3d29f9483a47_06843145 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>

	<title>Retornos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<link rel="icon" href="img/icon.png">

</head>
<body>

	<div class="container">


		<div class="row">
			<div class="col-sm">
				<h5>Retornos</h5>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">

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
							<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['RETORNOS']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<form action="<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
" method="post">
					     <tr>
								<?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['retornoid']))) {?>
	 				       <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['retornoid'];?>
" hidden style="background:rgba(255,255,255,0); width:30px" name="idretorno"><?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['retornoid'];?>
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
" name="hora"></td>
	 				      <?php }?>
	 				      <?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['observacao']))) {?>
									<?php ob_start();
echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['observacao'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('valor', $_prefixVariable1);?>
	 				       	<td><input id="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['observacao'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
" name="observacao"></td>
	 				      <?php }?>
								<?php if ((!empty($_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao']))) {?>
								<td>
									<p><?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
</p>
									<select value="<?php echo $_smarty_tpl->tpl_vars['RETORNOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['estadoid'];?>
" name="estado">
										<option value="1">Aberto</option>
										<option value="2">Em andamento</option>
										<option value="3">Fechado</option>
									</select>
								</td>
	 				      <?php }?>
								<td><input type="submit" class="btn btn-default" value="Salvar"></td>
					     </tr>
							 </form>
					    <?php
}
}
?>
						</tbody>
					</table>

			</div>
		</div>


</body>
</html>
<?php }
}
