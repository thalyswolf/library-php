<?php
$parametro = (isset($_POST['parametro'])) ? $_POST['parametro']:'';
if (!empty($parametro) && $parametro == 'data') {
  $retorno = array('datae'=> date('d-m-Y'));
  echo json_encode($retorno);
}
 ?>
