<?php
  session_start();
  require './lib/autoload.php';
  $sessao = $_SESSION['section'] = md5(date('h:i:s')+Config::SALT_KEY);
  $user = isset($_POST['user'])?$_POST['user']:false;
  $pass = isset($_POST['pass'])?$_POST['pass']:false;
  $currentUser = new User();
  if (($user) && ($pass)) {
    $currentUser->login($user, $pass);
  }


  $smarty = new Template();
  $logado = false;
  $smarty->assign('GET_TEMPLATE', Rotas::getTemplate());
  $smarty->assign('GET_HOME', Rotas::getHome());
  $smarty->assign('TITLE', Config::SITE_NOME);
  if(isset($_SESSION['username'])){
    $smarty->assign('SESSAO', $sessao);
    $smarty->assign('PAG_DASH', Rotas::pag_dash());
    $smarty->assign('PAG_COMPRAS', Rotas::pag_compras());
    $smarty->assign('PAG_CALENDAR', Rotas::pag_calendar());
    $smarty->display('index.tpl');
  }else{
    $smarty->assign('SESSAO', $sessao);
    $smarty->display('login.tpl');
  }

 ?>
