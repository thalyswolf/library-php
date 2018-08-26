<?php
  require_once('classes/Fabricante.php');
  require_once('classes/Produto.php');

  //Criação de objetos
  $p1 = new Produto('Chocolate', 10, 7);
  $f1 = new Fabricante ('Chocolate Factory', 'Willy Wonka Street', '123456543');

  //associação
  $p1->setFabricante($f1);

  //saída
  print "A descricao é ". $p1->getDescricao(). '<br>';
  print "A fabricante é ". $p1->getFabricante()->getNome().'<br>';
  print "O endereço da fabricante é ". $p1->getFabricante()->getEndereco().'<br>';
 ?>
