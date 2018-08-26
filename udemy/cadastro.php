<?php
  if (isset($_POST['nome']) && empty($_POST['nome'])) {
    echo "Preencha o nome completo";
  }
  if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
    echo "Preencha o cpf";
  }
  if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
    echo "CPF deve ser um número";
  }
 ?>
<form action="" method="post">
  <label for="nome">Nome Completo*:</label>
  <input type="text" name="nome"><br>

  <label for="cpf">CPF*:</label>
  <input type="text" name="cpf"><br>

  <input type="submit" name="" value="cadastrar">
</form>
