<?php
require_once('./class/db.class.php');
$id = $_POST['id'];

$sql = "SELECT * FROM cursos";

$objDb = new Db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);
if ($resultado_id) {
while($registro = mysqli_fetch_array($resultado_id)){
  echo "<option value='".$registro['id']."'>".$registro['id']." - ".$registro['nome_curso']."</option>";
}
}else{
  echo "Erro na consulta das compras";
}
 ?>
