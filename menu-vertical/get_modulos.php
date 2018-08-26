<?php
require_once('./class/db.class.php');
$id_curso = $_POST['id'];
$sql = "SELECT * FROM modulo_curso WHERE id_curso=$id_curso";

$objDb = new Db();
$link = $objDb->conecta_mysql();

 $resultado_id = mysqli_query($link, $sql);
if ($resultado_id) {
  while($registro = mysqli_fetch_array($resultado_id)){
    echo "<div class='panel panel-default'><h1>".$registro['nome_modulo']."</h1><small>".$registro['descricao']."</small></div>";
  }
}else{
   echo "Erro na consulta das compras";
}

 ?>
