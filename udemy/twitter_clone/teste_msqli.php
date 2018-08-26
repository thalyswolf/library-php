<?php

  require_once('db.class.php');

  $sql = "SELECT * FROM usuarios";

  $objDb = new Db();
  $link = $objDb->conecta_mysql();

  $resultado_id = mysqli_query($link, $sql);

  if ($resultado_id) {
    $dados_usuario = array();
    while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
      $dados_usuario[] = $linha;
    }
    var_dump($dados_usuario);
    foreach ($dados_usuario as $usuario) {
      echo($usuario['usuario']);
      echo($usuario['email']);
    }
  }else{
    echo "Erro";
  }
 ?>
