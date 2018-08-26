<?php
  require_once('class/db.class.php');
  if (isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()).$extensao;
    $diretorio = 'upload/';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
  }
  $nome = $_POST['nome'];
  $desc = $_POST['desc'];
  $sql = "INSERT INTO cursos(thumb, nome_curso, descricao) VALUES ('upload/$novo_nome', '$nome', '$desc')";
  $objDb = new Db();
  $link = $objDb->conecta_mysql();
  $resultado_id = mysqli_query($link, $sql);
  header('Location:index.php');
 ?>
