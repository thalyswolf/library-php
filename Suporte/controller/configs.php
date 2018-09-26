<?php
  $time = date("Y-m-d H:i");
  $smarty = new Template();
  if ($_POST['data']) {
    Usuario::save($_POST['nome'], md5(Config::SALT_KEY+$_POST['senha']), $_POST["nivel"]);
  }
  $smarty->assign('PAG_CONFIGS', Rotas::pag_configs());
  $smarty->assign("data", $time);
  $smarty->display('configs.tpl');
 ?>
