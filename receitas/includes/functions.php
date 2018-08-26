<?php
//conexãp
include('conn.php');

// verifica post enviados
if(isset($_POST['action'])){
  switch ($_POST['action']){
    case 'new_receita':
      $nome = $_POST['nome'];
      $descricao = $_POST['descricao'];
      $dificuldade = $_POST['dificuldade'];
      if($sql = $mysqli->prepare("INSERT INTO `receitas` (`nome`, `descricao`, `dificuldade`) VALUES (?,?,?)")){
        $sql->bind_param('ssi', $nome, $descricao, $dificuldade);

        $sql->execute();
      }
    break;
  }
}

function site_url(){
  return 'http://localhost/dashboard/receitas';
}

 ?>
