<?php
/* Smarty version 3.1.32, created on 2018-06-29 20:40:00
  from 'C:\xammpp7\htdocs\website\Suporte\view\notific.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b367d00229fd0_02359220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa84b3f4790b7cb6213d4d3a74891d1259df41b3' => 
    array (
      0 => 'C:\\xammpp7\\htdocs\\website\\Suporte\\view\\notific.tpl',
      1 => 1530276657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b367d00229fd0_02359220 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h5>Notificações</h5>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">

				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Usuário</th>
							<th scope="col">Link</th>
							<th scope="col">Horário</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Erickson Largura</td>
							<td><a href="http://tio.redeunifique.com.br/documentos/hd_unifique/hd_suporte.php?iCodCliente=134023&iCodProtocolo=201806221633262" target="_blank">Link do Retorno</td>
							<td>16:30</td>
							<td><button type="button" class="btn btn-secondary btn-sm btn-block">Remover</button></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Thalys Wolf</td>
							<td><a href="http://tio.redeunifique.com.br/documentos/hd_unifique/hd_suporte.php?iCodCliente=134023&iCodProtocolo=201806221633262" target="_blank">Link do Retorno</td>
							<td>12:00</td>
							<td><button type="button" class="btn btn-secondary btn-sm btn-block">Remover</button></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Amilcar Neto</td>
							<td><a href="http://tio.redeunifique.com.br/documentos/hd_unifique/hd_suporte.php?iCodCliente=134023&iCodProtocolo=201806221633262" target="_blank">Link do Retorno</td>
							<td>14:15</td>
							<td><button type="button" class="btn btn-secondary btn-sm btn-block">Remover</button></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>


	</div>

</body>
</html>
<?php }
}
