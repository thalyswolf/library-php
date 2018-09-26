<?php
  require './lib/autoload.php';
  $smarty = new Template();

  $smarty->assign('GET_TEMPLATE', Rotas::getTemplate());
  $smarty->assign('GET_HOME', Rotas::getHome());
  $smarty->assign('TITLE', Config::SITE_NOME);

  if (!isset($_SESSION['user'])) {
    $smarty->assign('PAG_DASH', Rotas::pag_dash());
    $smarty->assign('PAG_AGENDAR', Rotas::pag_agendar());
    $smarty->assign('PAG_CONFIGS', Rotas::pag_configs());
    $smarty->assign('PAG_NOTIFIC', Rotas::pag_notific());
    $smarty->assign('PAG_RELATORIO', Rotas::pag_relatorio());
    $smarty->assign('PAG_RETORNO', Rotas::pag_retorno());
    $smarty->display('index.tpl');
  }else{
    $smarty->display('login.tpl');
  }
 ?>
