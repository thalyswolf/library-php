<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:./index.php?erro=2');
  }
  require_once('../includes/db.class.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM compras AS c JOIN status_compra AS sc ON (c.id_status = sc.id) WHERE c.id=$id";
  $objDb = new Db();
  $link = $objDb->conecta_mysql();

  $resultado_id = mysqli_query($link, $sql);
  if($resultado_id){
    $dados_compra = mysqli_fetch_array($resultado_id);
    $data_compra = $dados_compra['data_compra'];
    $status = $dados_compra['descricao'];
  }else{
    echo "Erro ao consultar os dados do comprador";
  }
 ?>
 <table class="table table-striped table-bordered table-condensed">
 <tr class="dark">
   <td>Data da compra</td>
   <td><?=$data_compra?></td>
 </tr>
 <tr class="dark">
   <td>Status</td>
   <td><?=$status?></td>
 </tr>
</table>
