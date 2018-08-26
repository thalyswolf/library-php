<?php
require_once('/class/db.class.php');
$sql = "SELECT * FROM cursos";

$objDb = new Db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);
if ($resultado_id) {
  while($registro = mysqli_fetch_array($resultado_id)){
    echo "
  <a href='tela_curso.php?id_curso=".$registro['id']."'>
  <div class='col-md-4' '>
    <div class='thumbnail'>
      <img style='width:250px;height:200px;' class='img-responsive' src='".$registro['thumb']."' alt=''>
      <div class='caption'>
        <h3>".$registro['nome_curso']."</h3>
        <p>".$registro['descricao']."</p>
      </div>
    </div>
  </div>
  </a>
  ";
  }
}
 ?>
