<?php
require_once('./class/db.class.php');
$id_aula = $_POST['id'];
$sql = "SELECT cod_video FROM item_modulo WHERE id=$id_aula";

$objDb = new Db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);
if ($resultado_id) {
   while($registro = mysqli_fetch_array($resultado_id)){
     echo $registro['cod_video'];
   }
}else{
    echo "Erro na consulta ";
 }

 ?>
