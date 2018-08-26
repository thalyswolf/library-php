<?php
  session_start();
  require_once('../includes/db.class.php');
  $usuario = addslashes($_POST['name']);
  $senha = md5($_POST['password']);

  $sql = "SELECT id, usuario, permissao_id, id_pessoa FROM administradores WHERE usuario ='$usuario' AND senha= '$senha'";

  $objDb = new Db();
  $link = $objDb->conecta_mysql();

  echo "string";
  $resultado_id = mysqli_query($link, $sql);

  if ($resultado_id) {
    $dados_usuario = mysqli_fetch_array($resultado_id);
    echo "autenticou";
    if (isset($dados_usuario['usuario'])) {
      $_SESSION['id_usuario']=$dados_usuario['id'];
      $_SESSION['usuario']=$dados_usuario['usuario'];
      $_SESSION['permissao']=$dados_usuario['permissao_id'];
      $_SESSION['id_pessoa']=$dados_usuario['id_pessoa'];
      header('Location: ../painel.php');
    }else{
      header('Location:../index.php?erro=1');
    }
  }else{
    echo "Erro";
  }
 ?>
