<!DOCTYPE html>
<html>
<head>

	<title>Retornos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="icon" href="img/icon.png">

</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-sm">
				<h5>Relatórios</h5>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="height: 32px;">
						<label class="input-group-text" for="inputGroupSelect01" style="font-size: 14px;">Estado</label>
					</div>
					<select class="custom-select" id="inputGroupSelect01" style="height: 32px; font-size: 14px; line-height: 15px;">
						<option selected disabled="true">Selecione</option>
						<option value="1">Aberto</option>
						<option value="2">Tentativa</option>
						<option value="3">Reagendado</option>
						<option value="4">Resolvido</option>
					</select>
				</div>
			</div>
			<div class="col-sm">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="height: 32px;">
						<label class="input-group-text" for="inputGroupSelect01" style="font-size: 14px;">Data</label>
					</div>
					<input type="date" class="form-control" style="height: 32px; font-size: 14px; line-height: 15px;">
				</div>
			</div>
			<div class="col-sm">
				<div class="input-group mb-3">
					<div class="input-group-prepend" style="height: 32px;">
						<label class="input-group-text" for="inputGroupSelect01" style="font-size: 14px;">Responsável</label>
					</div>
					<select class="custom-select" id="inputGroupSelect01" style="height: 32px; font-size: 14px; line-height: 15px;">
						<option selected disabled="true">Selecione</option>
						<option value="1">Erickson Largura</option>
						<option value="2">Alexander Vestewig</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<button type="button" class="btn btn-secondary btn-sm btn-block">Consultar</button>
			</div>
		</div>

		<div class="row">
			<div class="col-sm">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Link</th>
							<th scope="col">Estado</th>
							<th scope="col">Última Alteração</th>
						</tr>
					</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td><a href="#">Link</a></td>
						<td>Resolvido</td>
						<td>17:10 - Erickson Largura</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td><a href="#">Link</td>
						<td>Tentativa</td>
						<td>16:20 - Alexander Vestewig</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td><a href="#">Link</td>
						<td>Aberto</td>
						<td>11:30 - Erickson Largura</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<h5>Total - Contatos com o Cliente: <span>X</span> - Finalizados/Encaminhados: <span>X</span></h5>
			</div>
		</div>

	</div>

</body>
</html>