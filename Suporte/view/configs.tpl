<!DOCTYPE html>
<html>
<head>
	<title>Retornos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="icon" href="img/icon.png">

</head>
<body>

<br>

	<div class="container">

		<div class="row">
			<div class="col-sm">
				<h5>Criar Usuário</h5>
			</div>
		</div>
		<form action="{$PAG_CONFIGS}" method="post">
			<input type="text" hidden value="{$data|md5}" name="data">
			<div class="row">
				<div class="col-sm">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Usuário</span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" name="nome">
					</div>
				</div>
				<div class="col-sm">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Senha</span>
						</div>
						<input type="password" class="form-control" placeholder="Senha" name="senha">
					</div>
				</div>
				<div class="col-sm">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Senha</span>
						</div>
						<input type="password" class="form-control" placeholder="Confirmar Senha">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="input-group mb-3">
						<div class="input-group-prepend" style="height: 32px;">
							<label class="input-group-text" for="inputGroupSelect01" style="font-size: 14px;">Nível de Acesso</label>
						</div>
						<select class="custom-select" id="inputGroupSelect01" style="height: 32px; font-size: 14px; line-height: 15px;" name="nivel">
							<option selected disabled="true">Selecione</option>
							<option value="1">Usuário</option>
							<option value="2">Administrador</option>
							<option value="3">Responsável pelo Retorno</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<button type="submit" class="btn btn-secondary btn-sm btn-block">Criar!</button>
				</div>
			</div>
		</form>
		<hr>





		<div class="row">
			<div class="col-sm">
				<h5>Consultar Usuário</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
					</div>
					<input type="text" class="form-control" placeholder="Nome">
				</div>
			</div>
			<div class="col-sm">
				<button type="button" class="btn btn-secondary btn-sm btn-block">Consultar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<button type="button" class="btn btn-secondary btn-sm btn-block">Consultar Tudo</button>
			</div>
		</div>
		<div class="row" hidden="">
			<div class="col-sm">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">1</th>
							<th scope="col">2</th>
							<th scope="col">3</th>
						</tr>
					</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Linha11</td>
						<td>Linha12</td>
						<td>Linha13</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Linha21</td>
						<td>Linha22</td>
						<td>Linha23</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Linha31</td>
						<td>Linha32</td>
						<td>Linha33</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
		<hr>





		<div class="row">
			<div class="col-sm">
				<h5>Alterar/Excluir Usuário</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="height: 32px;">
						<label class="input-group-text" for="inputGroupSelect01" style="font-size: 14px;">Usuário</label>
					</div>
					<select class="custom-select" id="inputGroupSelect01" style="height: 32px; font-size: 14px; line-height: 15px;">
						<option selected disabled="true">Selecione</option>
						<option value="1">Usuário 1</option>
						<option value="2">Usuário 2</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-sm">Nova Senha</span>
					</div>
					<input type="text" class="form-control" placeholder="Senha">
				</div>
			</div>
			<div class="col-sm">
				<div class="input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-sm">Nova Senha</span>
					</div>
					<input type="text" class="form-control" placeholder="Confirmar Senha">
				</div>
			</div>
			<div class="col-sm">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="height: 32px;">
						<label class="input-group-text" for="inputGroupSelect01" style="font-size: 14px;">Nível</label>
					</div>
					<select class="custom-select" id="inputGroupSelect01" style="height: 32px; font-size: 14px; line-height: 15px;">
						<option selected disabled="true">Selecione</option>
						<option value="1">Usuário</option>
						<option value="2">Administrador</option>
						<option value="3">Responsável pelo Retorno</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<button type="button" class="btn btn-secondary btn-sm btn-block">Excluir</button>
			</div>
			<div class="col-sm">
				<button type="button" class="btn btn-secondary btn-sm btn-block">Alterar</button>
			</div>
		</div>


	</div>

</body>
</html>
