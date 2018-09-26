<?php

  $retornos = new Retorno();
  if (isset($_POST['idretorno'])) {
    $id = $_POST['idretorno'];
    $hora = $_POST['hora'];
    $obs = $_POST['observacao'];
    $estado = $_POST['estado'];
    $retornos->updateRetornos($id, $hora, $estado, $obs);
  }
  $retorno = $retornos->getRetornos();
  $select = $retornos->montaSelect();
  $smarty = new Template();
  $smarty->assign('RETORNOS', $retorno);
  $smarty->assign('PAG_RETORNO', Rotas::pag_retorno());
  $smarty->assign('S', $select);
  $smarty->display('retorno.tpl');

 ?>
