<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:index.php?erro=1');
  }
  require_once('db.class.php');
  $objDb = new Db();
  $link = $objDb->conecta_mysql();
  $seguir_id_usuario = $_POST['seguir_id_usuario'];

  $id_usuario = $_SESSION['id_usuario'];

  $sql = "INSERT INTO usuarios_seguidores (id_usuario, seguindo_id_usuario) VALUES ($id_usuario , $seguir_id_usuario)";
  echo $sql;
  mysqli_query($link, $sql);
 ?>
