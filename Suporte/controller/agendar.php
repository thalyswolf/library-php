<?php
$time = date("Y-m-d H:i")
 if (isset($_POST['data']) == $time) {
  $link = $_POST['link'];
  $horario = $_POST['horario'];
  $avisar = $_POST['avisar'];
 }
  $smarty = new Template();
  $smarty->assign('PAG_AGENDAR', Rotas::pag_agendar());
  $smarty->assign("data", $time);
  $smarty->display('agendar.tpl');
 ?>
