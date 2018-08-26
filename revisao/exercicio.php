//crie uma função que receba 2 valores e um operador. Retorne o valor resultante e o imprima

<?php
   function FunctionName($operador, $valor1, $valor2)
  {
    switch ($operador) {
      case 1:
        # code...
        $r = $valor2+$valor1;
        $operador = '+';
        break;

      case 2:
          $operador = '-';
          $r =$valor1 - $valor2;
      break;

      case 3:
          $operador = '*';
          $r = $valor2*$valor1;
      break;

      case 4:
        $operador = '/';
        $r = $valor1/$valor2;
      break;
    }
    echo "<br />$valor1 $operador $valor2 <br />";
    return $r;
  }

    $v1 = rand(0,20);
    $v2 = rand(0,20);
    $op = rand(1,4);
    $res = FunctionName($op, $v1, $v2);


    echo "<br />resultado $res";
?>
