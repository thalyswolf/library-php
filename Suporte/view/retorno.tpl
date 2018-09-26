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
							{section name=i loop=$RETORNOS}
							<form action="{$PAG_RETORNO}" method="post">
					     <tr>
								{if (!empty($RETORNOS[i].retornoid))}
	 				       <td><input type="text" value="{$RETORNOS[i].retornoid}" hidden style="background:rgba(255,255,255,0); width:30px" name="idretorno">{$RETORNOS[i].retornoid}</td>
	 				      {/if}
	 				      {if (!empty($RETORNOS[i].link))}
	 				       <td><a href="{$RETORNOS[i].link}">Link retorno</a></td>
	 				      {/if}
	 				      {if (!empty($RETORNOS[i].horacadastro))}
	 				       <td>{$RETORNOS[i].horacadastro}</td>
	 				      {/if}
	 				      {if (!empty($RETORNOS[i].hora))}
	 				       <td><input type="text" value="{$RETORNOS[i].hora}" name="hora"></td>
	 				      {/if}
	 				      {if (!empty($RETORNOS[i].observacao))}
									{assign var="valor" value={$RETORNOS[i].observacao}}
	 				       	<td><input id="{$RETORNOS[i].observacao}" type="text" value="{$valor}" name="observacao"></td>
	 				      {/if}
								{if (!empty($RETORNOS[i].descricao))}
								<td>
									<p>{$RETORNOS[i].descricao}</p>
									<select value="{$RETORNOS[i].estadoid}" name="estado">
										<option value="1">Aberto</option>
										<option value="2">Em andamento</option>
										<option value="3">Fechado</option>
									</select>
								</td>
	 				      {/if}
								<td><input type="submit" class="btn btn-default" value="Salvar"></td>
					     </tr>
							 </form>
					    {/section}
						</tbody>
					</table>

			</div>
		</div>


</body>
</html>
