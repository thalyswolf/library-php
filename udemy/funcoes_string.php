<?php
  $texto = 'curso completo de PHP';

  echo strtolower($texto),'<br>';
  echo strtoupper($texto),'<br>';
  echo ucfirst($texto);
  echo "<hr>";

  //tamanho da string
  //echo strlen($texto);

  $cpf = isset($_POST['cpf']) ? $_POST['cpf']:'';
  $total_cpf = strlen($cpf);
  if( $total_cpf != 11 && $cpf != ''){
    echo "CPF inválido";
  }
 ?>

 <form action="" method="post">
   cpf
   <input type="text" name="cpf">
   <input type="submit" value="cadastrar">
 </form>
<hr>
<?php
  $valor = '12.40';
  $valor2 = '103.795.119-08';
  echo str_replace('.',',', $valor);
  $cp = str_replace('.','', $valor2);
  echo "<br>", str_replace('-','',$cp);
 ?>

 <hr>

 <?php
    $txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    echo substr($txt, 0, 40),'...';
  ?>
