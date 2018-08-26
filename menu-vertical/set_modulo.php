<?php
  if (isset($_POST['nome'])) {
    require_once('/class/db.class.php');
    $nome = $_POST['nome'];
    $descricao = $_POST['desc'];
    $id_curso = $_POST['curso'];

    $sql = "INSERT INTO modulo_curso (nome_modulo, descricao, id_curso) VALUES ('$nome', '$descricao', '$id_curso')";

    $objDb = new Db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);
    header('Location:painel_curso.php');
  }
 ?>
