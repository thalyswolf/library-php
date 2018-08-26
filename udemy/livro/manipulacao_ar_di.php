<?php
  //__FILE__
  //abre o arquivo pra leitura
  $fd = fopen('recursao.php', "r");
  $linha = 1;

  while (!feof($fd)) {
    $buffer = fgets($fd, 4096);
    if($linha>1){
      echo $buffer;
    }
    $linha++;
  }
  //abre o arquivo pra escrita
  $fp = fopen('tmp/file.txt', "w");
  fwrite($fp, "linha 1" . PHP_EOL);
  fwrite($fp, "linha 2" . PHP_EOL);
  fwrite($fp, "linha 3" . PHP_EOL);
  fwrite($fp, "linha 4" . PHP_EOL);
  fclose($fp);

  echo file_put_contents('tmp/teste.txt', 'este é \n é o conteudo \n do arquivo');
  echo "<hr>";

  $origem = "tmp/oldname.txt";
  $destino = "tmp/newname.txt";

  if (rename($origem, $destino)) {
    echo "renomeação complete";
  }else{
    echo "não";
  }

 ?>
