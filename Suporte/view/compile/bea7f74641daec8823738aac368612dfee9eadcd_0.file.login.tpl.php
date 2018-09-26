<?php
/* Smarty version 3.1.32, created on 2018-07-05 18:56:59
  from 'C:\xammpp7\htdocs\website\Suporte\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3e4ddb2dae64_70404767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bea7f74641daec8823738aac368612dfee9eadcd' => 
    array (
      0 => 'C:\\xammpp7\\htdocs\\website\\Suporte\\view\\login.tpl',
      1 => 1530214980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3e4ddb2dae64_70404767 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>

	<title>Retornos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<link rel="icon" href="img/icon.png">

	<style type="text/css">
		.cent {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 100vh;
		}
	</style>

</head>
<body>

	<div class="cent">
		<div class="container" style="width: 500px;">


			<div style="border: 3px solid #737373; border-radius: 5px;">
				<div style="margin: 10px;">
					<div class="row">
						<div class="col-sm">
							<h5>Login</h5>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm">
							<div class="input-group input-group-sm mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-sm">Usuário</span>
								</div>
								<input type="text" class="form-control" placeholder="Usuario">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<div class="input-group input-group-sm mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-sm">Senha</span>
								</div>
								<input type="text" class="form-control" placeholder="Senha">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<button type="button" class="btn btn-secondary btn-sm btn-block">Recuperar Senha</button>
						</div>
						<div class="col-sm">
							<button type="button" class="btn btn-secondary btn-sm btn-block">Login!</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>



</body>
</html><?php }
}
