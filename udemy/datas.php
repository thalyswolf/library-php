<?php
  echo date('d/m/Y'),'<br>';
  echo date('d/m/y'),'<br>';
  echo date('d-m-y'),'<br>';

  echo date('d-m-y H:i'),'<br>';

 ?>
<hr>

<?php
  $data_inicial = '2015-04-02';
  $data_final = '2015-04-06';

  $time_inicial = strtotime($data_inicial);
  $time_final = strtotime($data_final);

  $diferenca_times = $time_final - $time_inicial;
  echo $diferenca_times;
  $diaSegundos = 24*60*60;
  $diasDiferenca = $diferenca_times/$diaSegundos;
  echo '<br>',$diasDiferenca;
 ?>
