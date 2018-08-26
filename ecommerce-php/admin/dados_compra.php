<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:./index.php?erro=2');
  }
  require_once('includes/db.class.php');

  $id_compras = $_GET['compra'];
  //SELECT carrinho_id, data_compra, comprador_id, anuncio_id, produto_id, preco_un, quantidade_compra FROM compras as c JOIN carrinhos as ca on (c.carrinho_id = ca.id) JOIN itens_carrinho as ic on (ca.id = ic.id) JOIN anuncio_produto as ap on (ic.anuncio_id = ap.id)
  $sql = "SELECT * FROM compras AS c JOIN carrinhos AS ca ON (c.carrinho_id = ca.id) WHERE c.id = $id_compras";

  $objDb = new Db();
  $link = $objDb->conecta_mysql();

  $resultado_id = mysqli_query($link, $sql);

  if ($resultado_id) {
    $dados_usuario = mysqli_fetch_array($resultado_id);
    $id_comprador = $dados_usuario['comprador_id'];
  }else{
    echo "Erro na consulta dos dados";
  }
  require_once('includes/menu-admin.php');
?>
<script type="text/javascript">
$.ajax({
      url: "requisitions/get_dados_comprador.php",
      method:'get',
      data:{id:<?= $id_comprador ?> },
      success: function (data){
        $('.comprador').html(data);
      }
});
$.ajax({
      url: "requisitions/get_dados_compra.php",
      method:'get',
      data:{id:<?= $id_comprador ?> },
      success: function (data){
        $('.compras').html(data);
      }
});

$.ajax({
      url: "requisitions/get_dados_produtos.php",
      method:'get',
      data:{id:<?= $id_comprador ?> },
      success: function (data){
        $('.produtos').html(data);
      }
})
</script>
<div class="container painel">
  <div class="col-sm-4">
    <h2>Dados do comprador</h2>
    <div class="comprador">

    </div>
  </div>
  <div class="col-sm-4">
    <div id="content">
      <h2>Dados da compra</h2>
      <div class="compras">

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <h2>Dados do produto</h2>
    <div class="produtos">

    </div>
  </div>
