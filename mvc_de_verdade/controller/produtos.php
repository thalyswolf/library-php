<?php
  $smarty = new Template();

  $produtos = new Produtos();
  $produtos->getProdutos();
  $smarty->assign('PRO',$produtos->getItens());
  $smarty->display('produtos.tpl');
 ?>
