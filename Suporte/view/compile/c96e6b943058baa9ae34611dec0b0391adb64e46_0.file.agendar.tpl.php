<?php
/* Smarty version 3.1.32, created on 2018-07-05 19:28:31
  from 'C:\xammpp7\htdocs\website\Suporte\view\agendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3e553f1f3de1_52083987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96e6b943058baa9ae34611dec0b0391adb64e46' => 
    array (
      0 => 'C:\\xammpp7\\htdocs\\website\\Suporte\\view\\agendar.tpl',
      1 => 1530809588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3e553f1f3de1_52083987 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h5>Agendar Retorno</h5>
			</div>
		</div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['PAG_AGENDAR']->value;?>
" method="post">
			<input type="text" hidden value="<?php echo md5($_smarty_tpl->tpl_vars['data']->value);?>
" name="data">
			<div class="row">
				<div class="col-6">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Link</span>
						</div>
						<input type="text" class="form-control" placeholder="Link do Protocolo" name="link">
					</div>
				</div>
				<div class="col-3">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Horário</span>
						</div>
						<input type="text" class="form-control" placeholder="Exemplo: 04-10, 14hrs" name="horario">
					</div>
				</div>
				<div class="col-3">
					<div class="input-group mb-3">
						<div class="input-group-prepend" style="height: 32px;">
							<div class="input-group-text">
								<input type="checkbox" name="avisar" value="1">
							</div>
						</div>
						<input type="text" class="form-control" disabled="" placeholder="Avisar responsável?" style="height: 32px; font-size: 14px; line-height: 15px;">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<button type="submit" class="btn btn-secondary btn-sm btn-block">Enviar</button>
				</div>
			</div>
		</form>

		<br>
		<div class="row">
			<div class="col-sm">
				<p style="font-size: 12px;">OBS.: Apenas o LINK é obrigatório, os dois outros campos são opcionais.</p>
			</div>
		</div>
	</div>

</body>
</html>
<?php }
}
