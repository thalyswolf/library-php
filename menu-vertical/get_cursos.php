<?php
require_once('./class/db.class.php');
$id = $_POST['id'];

function montaUl($id_modulo){
  $objDb = new Db();
  $link = $objDb->conecta_mysql();
  $sql = "SELECT * FROM item_modulo WHERE id_modulo=$id_modulo";
  $resultado_id = mysqli_query($link, $sql);
  if ($resultado_id) {
    while($registro = mysqli_fetch_array($resultado_id)){
      echo "<li id='".$registro['id']."' onclick='req(".$registro['id'].")'><a href='#'>".$registro['nome_item']."</a></li>";
    }
  }
}
$sql = "SELECT * FROM cursos as c JOIN modulo_curso AS mc ON(c.id = mc.id_curso) WHERE c.id=$id";

$objDb = new Db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);
?>
<nav>
<?php
if ($resultado_id) {
  while($registro = mysqli_fetch_array($resultado_id)){
    echo "<div class='item'>";
    echo "<input type='checkbox' id=".$registro['id'].">";
    echo "<label for='".$registro['id']."'>".$registro['nome_modulo']."</label>";
    echo "<ul>";
    montaUl($registro['id']);
    echo "</ul>";
    echo "</div>";
  }
}else{
  echo "Erro na consulta das compras";
}
 ?>
</nav>
