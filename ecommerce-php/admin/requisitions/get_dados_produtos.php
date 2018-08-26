<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:./index.php?erro=2');
  }
  require_once('../includes/db.class.php');
  $preco_total = 0;
  $id = $_GET['id'];
  $sql = "SELECT * FROM compras WHERE id=$id";
  $objDb = new Db();
  $link = $objDb->conecta_mysql();

  $resultado_id = mysqli_query($link, $sql);
  if($resultado_id){
    $dados_compra = mysqli_fetch_array($resultado_id);
    $carrinho_id= $dados_compra['carrinho_id'];
  }else{
    echo "Erro ao consultar os dados do comprador";
  }
  $sql = "SELECT * FROM itens_carrinho AS ic JOIN anuncio_produto AS a ON(ic.anuncio_id = a.id) JOIN produtos AS p ON(a.produto_id = p.id) WHERE ic.id_carrinho=$carrinho_id";
  $resultado_id = mysqli_query($link, $sql);
  if ($resultado_id) {
    while($registro = mysqli_fetch_array($resultado_id)){
      echo "<div style='margin:5px; padding:10px;'>";
      echo "<a href='' class='list-group-item'>";
      echo "<h4>".$registro['nome']."</h4>";
      echo "<h5>Quantidade: ".$registro['quantidade']."</h5>";
      echo "<h5>Preço Un: ".$registro['preco_un']."</h5>";
      echo "</a>";
      echo "</div>";
      $preco_total += ($registro['quantidade']*$registro['preco_un']);
    }
  }else{
    echo "Erro na consulta das compras";
  }
  echo "<p>Preço total: ". $preco_total."</p>";
 ?>
