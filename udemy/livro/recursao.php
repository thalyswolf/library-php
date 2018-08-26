<?php
  function fatorial($numero){
    if($numero == 1){
      return $numero;
    }else{
      return $numero * fatorial($numero-1);
    }
  }
  echo "<hr /> ";
  echo "O fatorial de 5 é ". fatorial(5)."<br />";
  echo "O fatorial de 7 é ". fatorial(7)."<br />";
 ?>
