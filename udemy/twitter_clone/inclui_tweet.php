<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:index.php?erro=1');
  }
  require_once('db.class.php');
  $objDb = new Db();
  $link = $objDb->conecta_mysql();


  $texto_tweet = $_POST['texto_tweet'];
  $id_usuario = $_SESSION['id_usuario'];

  $sql = "INSERT INTO tweet (id_usuario, tweet) VALUES ($id_usuario , '$texto_tweet')";
  mysqli_query($link, $sql);
 ?>