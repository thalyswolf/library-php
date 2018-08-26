<?php
    $id = $_GET['id'];

    if($sql = $mysqli -> prepare("SELECT * FROM receitas WHERE id=$id")){
       $sql->bind_result($id, $nome, $dificuldade, $descricao);
    }
    while($sql->fetch()){
            echo("<li><a href=\"receitas_detalhes.php?id=$id\">$nome</a> $descricao <b>$dificuldade</b></li>");
          }
?>