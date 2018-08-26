<?php
  // $valor = null;
  //
  //
  // if (isset($valor)) {
  //   echo "retornou true";
  // }else{
  //   echo "Retornou false";
  // }


  //Empty
  // true -> '',0,'0',false,null,array()
  // $valor = 1;
  // if (empty($valor)) {
  //   echo "Vazia";
  // }else{
  //   echo "tem conteudo";
  // }

  //is_numeric

  $valor = '1';
  echo $valor*2;;
  if (is_numeric($valor)) {
    echo "Numero";
  }else{
    echo "Letra";
  }
  ?>
