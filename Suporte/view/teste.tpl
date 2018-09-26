<form class="" action="{$PAG_RETORNO}" method="post">
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
       {section name=i loop=$RETORNOS}
       <tr>
        {if (!empty($RETORNOS[i].retornoid))}
         <td>{$RETORNOS[i].retornoid}</td>
        {/if}
        {if (!empty($RETORNOS[i].link))}
         <td><a href="{$RETORNOS[i].link}">Link retorno</a></td>
        {/if}
        {if (!empty($RETORNOS[i].horacadastro))}
         <td>{$RETORNOS[i].horacadastro}</td>
        {/if}
        {if (!empty($RETORNOS[i].hora))}
         <td><input type="text" value="{$RETORNOS[i].hora}"></td>
        {/if}
        {if (!empty($RETORNOS[i].observacao))}
          {assign var="valor" value={$RETORNOS[i].observacao}}
          <td><input id="{$RETORNOS[i].observacao}" type="text" value="{$valor}" name="teste"></td>
        {/if}
        {if (!empty($RETORNOS[i].descricao))}
        <td>
          <select value="{$RETORNOS[i].descricao}">
            <option>{$RETORNOS[i].descricao}</option>
            <option>Em andamento</option>
            <option>Reagendado</option>
          </select>
        </td>
        {/if}
        <td><input type="submit" class="btn btn-default" value="Salvar"></td>
       </tr>
      {/section}
    </tbody> -->
