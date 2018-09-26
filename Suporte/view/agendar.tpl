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
				<h5>Agendar Retorno</h5>
			</div>
		</div>
		<form action="{$PAG_AGENDAR}" method="post">
			<input type="text" hidden value="{$data|md5}" name="data">
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
