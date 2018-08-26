<?php
  session_start();
  unset($_SESSION['usuario']);
  unset($_SESSION['id_usuario']);
  unset($_SESSION['permissao']);
  unset($_SESSION['id_pessoa']);
  header('Location:index.php');
 ?>
