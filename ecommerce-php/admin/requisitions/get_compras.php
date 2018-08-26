<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location:./index.php?erro=2');
}
require_once('../includes/db.class.php');

$sql = "select c.id, c.carrinho_id, comprador_id, p.nome from compras as c join carrinhos as cs on (c.carrinho_id = cs.id)
 join clientes as cl on (cs.comprador_id = cl.id) left join pessoas as p on (cl.id_pessoa = p.id)";

$objDb = new Db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);
if ($resultado_id) {
  while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
    echo "<div style='margin:5px'>";
    echo "<a href='dados_compra.php?compra=".$registro['id']."' class='list-group-item'>";
    echo "Número da compra:".$registro['id']."<h4>".$registro['nome']."</h4>";
    echo "</a>";
    echo "</div>";
  }
}else{
  echo "Erro na consulta das compras";
}
 ?>
