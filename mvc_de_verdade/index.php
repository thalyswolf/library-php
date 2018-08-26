<?php
  require './lib/autoload.php';
  $smarty = new Template();



  //valores para o template
  $smarty->assign('NOME','Thalys');
  $smarty->assign('GET_TEMA', Rotas::get_siteTemplate());
  $smarty->assign('GET_HOME', Rotas::get_siteHOME());
  $smarty->assign('PAG_CARRINHO', Rotas::pag_carrinho());
  $smarty->assign('PAG_CONTATO', Rotas::pag_contato());
  $smarty->assign('PAG_MINHACONTA', Rotas::pag_minhaconta());
  $smarty->assign('TITLE', Config::SITE_NOME);

  $dados = new Conexao();
  $sql = "SELECT * FROM categorias";
  $dados->executeSQL($sql);
  $lista = $dados->listarDados();
  
  $smarty->display('index.tpl');
 ?>
