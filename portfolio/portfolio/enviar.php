<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = 'Portifólio';
  $mensagem = $_POST['msg'];
 ?>
 <?php
    $to = 'thalyswolf01@gmail.com';
    $subject = "$assunto";
    $message = "$mensagem";
    $header = "MIME-Version: 1.0\n";
    $header .= "Content-type: text/html; charset=iso-8869-1 \n";
    $header .= "From: $email";
    mail($to,$subject,$message,$header);
    header('Location:index.php?contato=true#contato');
  ?>
