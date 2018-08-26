<h2>Lista de produtos</h2>
<hr>

<section id="paginacao">
  <center>
    Paginas
  </center>
</section>

<section id="produtos" class="row">

    {foreach from=$PRO item=p}
      <div class="col-xs-4" style="margin:30px">
        <div class="thumbnail">
           <img alt="..." src="http://placehold.it/150x150">
        </div>
        <div class="caption">
            <h3>{$p.pro_nome}</h3>
            <p>{$p.pro_valor}</p>
        </div>
      </div>

    {/foreach}


</section>

<section id="paginacao-inferior" class="">
  <center>
    Paginas
  </center>
</section>
