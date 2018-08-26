<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $vetor= Array();
      $repetido= Array();
      // criar numeros
      $v=0;
      $r = 0;
      for ($i=0; $i < 10; $i++) {
          $vetor[$i] = rand(0,10);
          echo "vetor $vetor[$i] <br>";
      }
      echo "<hr>";
      $valores = $repetido = Array();
      foreach ($vetor as $value) {
         $repetido[$value]++;
      }

      
      print_r($repetido);
     ?>
  </body>
</html>
